<?php
session_start();

define("SMS_API_USER","bsgh-bernserg");
define("SMS_API_PWD","Kofie@12");

include("../modules/user.php");
include("../modules/transaction.php");
include("../modules/contact.php");
include("../modules/message.php");

function config($str){

    if(!file_exists("config.json")){
        return [
            "error"=>40400,
            "msg"=>"Missing configuration file"
        ];
        exit();
    }else{
        $j = json_decode(file_get_contents("config.json"));

        switch($str){

            case"admin";
                return $j->admin;
            break;

            case"profile";
                return $j->portal;
            break;

            case"price";
                return $j->setup->price;
            break;

            case"domain";
                return $j->setup->domain;
            break;

            case"setup";
                return $j->setup;
            break;

            case"payment";
                return $j->setup->payment;
            break;

            case"currency";
                return $j->setup->currency;
            break;

            case"connection";
                return $j->setup->external_dbmode;
            break;

            case"key";
                return md5(sha1(time().uniqid()));
            break;
        }
    }
}

function __GatewaySendSMS($destination,$sendID = "bernserg",$msg){

    $sms['username'] = SMS_API_USER;
    $sms['password'] = SMS_API_PWD;
    $sms['destination'] = $destination;
    $sms['source'] = $sendID;
    $sms['message'] = $msg;
    $sms['type'] = 0;
    $sms['dlr']=1;

    $url ="rslr.connectbind.com:8080/bulksms/bulksms?";
    $postdata = http_build_query($sms);
    $c = curl_init();
    curl_setopt($c,CURLOPT_URL,$url);
    curl_setopt($c,CURLOPT_POST,true);
    curl_setopt($c,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    $content = curl_exec($c);

    curl_close($c);
    $response = explode("|",$content);
    $error = $response[0];

    if ($error == 1701){
        return TRUE;
    }else{
        return FALSE;
    }
}

function __GatewaySchudelSMS($destination,$sendID,$date,$time,$msg){

    $sms['username'] = SMS_API_USER;
    $sms['password'] = SMS_API_PWD;
    $sms['destination'] = $destination;
    $sms['source'] = $sendID;
    $sms['message'] = $msg;
    $sms['type'] = 0;
    $sms['date'] = $date;
    $sms['time'] = $time;
    $sms['gmt'] = "";

    $url ="rslr.connectbind.com:8080/bulksms/schedulesms?";
    $postdata = http_build_query($sms);
    $c = curl_init();
    curl_setopt($c,CURLOPT_URL,$url);
    curl_setopt($c,CURLOPT_POST,true);
    curl_setopt($c,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    $content = curl_exec($c);
    curl_close($c);

    $response = explode("|",$content);
    $error = $response[0];

    if ($error == 1701){
        return TRUE;
    }else{
        return FALSE;
    }   
}

try {
    
   $_CONN = new PDO('sqlite:../install/sms.db');

    if(!isset($_REQUEST['endpoint'])){
        $result = array(
            "error"=>5005,
            "msg"=>"missing endpoint parameter"
        );
    }else{
        if(!isset($_REQUEST['auth'])){
            $result = array(
                "error"=>20510,
                "msg"=>"missing authorization parameter"
            );
        }else{

            $user = explode(":",$_REQUEST['auth']);
            $_login['username'] = $user[0];
            $_login['password'] = $user[1];
            $response = UserAccount::login($_CONN,$_login);
            if($response == false){
                $result = array(
                    "error"=>20520,
                    "msg"=>"invaild authorization"
                );
            }else{
                $_SESSION['uID'] = $response['userID'];
                switch($_REQUEST['endpoint']){

                    case"qk-sms";
                        $to_mobile= $_REQUEST['rpt'];
                        $msg = $_REQUEST['msg'];
                
                        if(!isset($_REQUEST['sender-id'])){
                            $senderID ="smsbox";
                        }else{
                            $senderID = $_REQUEST['sender-id'];
                        }
                        $sms[] = $_SESSION['uID'];
                        $sms[] = date("d-m-y H:i:s");
                        $sms[] = $_REQUEST['rpt'];
                        $sms[] = $senderID;
                        $sms[] = $_REQUEST['msg'];
                        $sms[] = "pending"; 
                        $sms = Message::add_message($_CONN,$sms); 
                        if (preg_match('/,/', $to_mobile)) {
                            // string contains characters other than |
                            $m = explode(",",$to_mobile);
                            $total = count($m);
                        }elseif(preg_match('/;/', $to_mobile)){
                            $m = explode(";",$to_mobile);
                            $total = count($m);
                        }else{
                            $m = $_REQUEST['rpt'];
                            $total = 1;
                        }
                        //sms gatewaye
                        $legder = Transaction::balance($_CONN,$_SESSION['uID']);
                        if($legder['bal'] < 0.2){
                            $result = array(
                                "error"=>20003,
                                "msg"=>"Insufficient funds"
                            );
                            $_LOG[] = $_SESSION['uID'];
                            $_LOG[] = "Insufficient funds";
                            $_LOG[] = "warning";
                        }else{
                            
                            $price = config("price");
                            $amt = $total * $price;
                            $CR[] = date("Y-m-d H:i:s");
                            $CR[] = $_SESSION['uID'];
                            $CR[] = time();
                            $CR[] = "Send $total SMS @ $price GHS";
                            $CR[] = $amt;
                            $legder = Transaction::credit($_CONN,$CR);
                            if($legder == false){
                                $result = array(
                                    "error"=>20004,
                                    "msg"=>"error updating transaction ledger"
                                );
                            }else{
                                //send ssms
                                $SendQuickSMS = __GatewaySendSMS($to_mobile,$senderID,$msg);
                
                                if(false == $SendQuickSMS){
                                    $result = array(
                                        "error"=>20500,
                                        "msg"=>"Send SMS failed"
                                    );
                                    $_LOG[] = $_SESSION['uID'];
                                    $_LOG[] = "Send SMS Unsuccessful";
                                    $_LOG[] = "danger"; 
                                }else{
                                    
                                    $_SMS[] = $_SESSION['uID'];
                                    $_SMS[] = $to_mobile;
                                    $_SMS[] = $msg;
                                    $smslog = Message::Log($_CONN,$_SMS);
                
                                    $_LOG[] = $_SESSION['uID'];
                                    $_LOG[] = "Send SMS Successful";
                                    $_LOG[] = "success"; 
                                    
                                    $result = array(
                                        "error"=>20200,
                                        "msg"=>"Send SMS Successful"
                                    );
                                }
                            }
                        }    
                        $log = UserAccount::AddEventLog($_CONN,$_LOG);

                    break;

                    case"bk-sms";
                        $_ID = $_REQUEST['to-group'];
                        $msg = $_REQUEST['msg'];
                        $sender = $_REQUEST['sender-id'];
                        $mobile = Contact::View($_CONN,$_REQUEST['to-group']);
                        $total = count($mobile);
                        $to_mobile = format_mobile_num($mobile);
                        //sms gatewaye
                        $legder = Transaction::balance($_CONN,$_SESSION['uID']);
                        if($legder['bal'] < 1){
                            $result = array(
                                "error"=>20003,
                                "msg"=>"Insufficient funds"
                            );
                
                            $_LOG[] = $_SESSION['uID'];
                            $_LOG[] = "Insufficient funds";
                            $_LOG[] = "warning";
                        }else{
                            $price = config("price");
                            $amt = $total * $price;
                            $CR[] = $_SESSION['uID'];
                            $CR[] = time();
                            $CR[] = "Send $total SMS @ $price GHS";
                            $CR[] = $amt;
                            $legder = Transaction::credit($_CONN,$CR);
                            if($legder == false){
                                $result = array(
                                    "error"=>20004,
                                    "msg"=>"error updating transaction ledger"
                                );
                            }else{
                                //send ssms
                                if(false == __GatewaySendSMS($to_mobile,$senderID,$msg)){
                                    $result = array(
                                        "error"=>20500,
                                        "msg"=>"Send SMS failed"
                                    );
                
                                    $_LOG[] = $_SESSION['uID'];
                                    $_LOG[] = "Send SMS failed";
                                    $_LOG[] = "success"; 
                                }else{
                                    $_SMS[] = $_SESSION['uID'];
                                    $_SMS[] = $to_mobile;
                                    $_SMS[] = $msg;
                
                                    $smslog = Message::Log($_CONN,$_SMS);
                                    
                                    $_LOG[] = $_SESSION['uID'];
                                    $_LOG[] = "Send SMS unsccessful";
                                    $_LOG[] = "success"; 
                                    
                                    $result = array(
                                        "error"=>20200,
                                        "msg"=>"Send SMS Successful"
                                    );
                                }
                            }
                        }    
                        $log = UserAccount::AddEventLog($_CONN,$_LOG);
                    break;
                }
            }           
        }
    }  
}catch(PDOException $e) {
    $result = array(
        "error"=>5000,
        "msg"=>'PDO Connection: ',  $e->getMessage()
    ); 
}
$_CONN = null;
$_REQUEST = null;

header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$response = array(
    "clock"=>time(),
    "ver"=>"0.1",
    "response"=>$result
);
echo json_encode($response);
?>
<?php

define("SMS_API_USER","bsgh-bernserg");
define("SMS_API_PWD","Kofie@12");

function config($str){

    if(!file_exists("config.json")){
        echo "No config file";
        exit();
    }else{
        $j = json_decode(file_get_contents("config.json"));

        switch($str){

            case"admin";
                return $j->admin;
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

function TokenKey(){
 
    return md5($_SERVER['HTTP_HOST']);
}

function UserSession($uID){

    if(!file_exists("eula")){
        header("location: ?page=eula-user-zero");
    }else{
        $eula = file_get_contents("eula");
        $uID = md5($uID);
        if(false == password_verify($uID,$eula)){
            header("location: ?page=activition");
        }
    }
}    

function GatewayBalanceSMS(){
    
    $sms['username'] = SMS_API_USER;
    $sms['password'] = SMS_API_PWD;
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "rslr.connectbind.com:8080/CreditCheck/checkcredits?".http_build_query($sms),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    if($response === "PERMISSION DENIED"){
        return 0;
    }else{
        return explode(":",$response);
    }
}

function __GatewaySendSMS($destination,$sendID,$msg){

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

    $str_total = strlen($content);
    $text = 4 - $str_total;

    $msg = substr($content,0,$text);

    if ($msg == 1701){
        return TRUE;
    }else{
        return FALSE;
    }
}

function __GatewaySchudelSMS($destination,$sendID,$date,$time){

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

    $str_total = strlen($content);
    $text = 4 - $str_total;

    $msg = substr($content,0,$text);

    if ($msg == 1701){
        return TRUE;
    }else{
        return FALSE;
    }   
}

?>
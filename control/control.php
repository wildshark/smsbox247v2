<?php

function connection($r){

    $host = $r['host'];
    $dbname = $r['dbname'];
    $username = $r['user'];
    $password = $r['pwd'];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }catch(PDOException $e) {
        $conn = array(
            "status"=>5000,
            "msg"=>'PDO Connection: ',  $e->getMessage(), "\n"
        ); 
    }

    return $conn;
}

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

            case"api";
                return $j->setup->api;
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
        }

    }
}

function user_session(){

}

function GatewayBalanceSMS(){
    
    $sms['username'] ="bsgh-bernserg";
    $sms['password'] ="Kofie@12";
    
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

    $sms['username'] ="bsgh-bernserg";
    $sms['password'] ="Kofie@12";
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

    $sms['username'] ="bsgh-bernserg";
    $sms['password'] ="Kofie@12";
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
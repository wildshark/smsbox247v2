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
    
    $sms['username'] ="bsgh-iquipe";
    $sms['password'] ="@PassWD8";
    
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
        $d['status'] ="successful";
        $d['error'] = 200;

    }else{
        $d['status'] ="failed";
        $d['error'] = 404;
    }
}

function __GatewaySendSMS($destination,$sendID,$msg){

    $sms['username'] ="bsgh-iquipe";
    $sms['password'] ="@PassWD8";
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
        $d['status'] ="successful";
        $d['error'] = 200;

    }else{
        $d['status'] ="failed";
        $d['error'] = 404;
    }

    return $d;
}

function __GatewaySchudelSMS(){

    $sms['username'] ="bsgh-iquipe";
    $sms['password'] ="@PassWD8";
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
        $d['status'] ="successful";
        $d['error'] = 200;

    }else{
        $d['status'] ="failed";
        $d['error'] = 404;
    }
    
}
 
?>
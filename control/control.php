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
        }

    }
}

function user_session(){

}

function send_sms(){

}

function schudel_sms(){
    
}
?>
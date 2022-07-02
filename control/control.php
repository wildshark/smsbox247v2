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

function user_session(){

}


?>
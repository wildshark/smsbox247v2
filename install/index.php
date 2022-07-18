<?php
include("../route.inc");
if(!isset($_REQUEST['install'])){
    header("location: phpliteadmin.php");
}else{
    $host = HOST_DB;
    $username = USR_DB;
    $password = PWD_DB;
    $dbname = NAME_DB;
    
    try {

        $conn = new PDO("mysql:host=$host;
            dbname=$dbname", 
            $username,
            $password
        );

        $file = file_get_contents("db.sql");
        $stmt = $conn->prepare($file);
        if(false == $stmt->execute()){
            
        }else{

        }
    }catch(PDOException $e) {
        echo 'PDO Connection: ',  $e->getMessage();
    }

}


?>
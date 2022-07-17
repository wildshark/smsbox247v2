<?php
include("../control/control.php");
$host = HOST_DB;
$username = USR_DB;
$password = PWD_DB;
$dbname = NAME_DB;
try {
   // $host ="sql.qshark.ml";
   // $username="quaye";
   // $password="quaye8282";
   // $dbname = "sms247box";
    $conn = new PDO("mysql:host=$host;
        dbname=$dbname", 
        $username,
        $password
    );

$file = file_get_contents("db.sql");
$stmt = $conn->prepare($file);
$data =$stmt->execute();
var_dump($data);

}catch(PDOException $e) {
    echo 'PDO Connection: ',  $e->getMessage();
}

?>
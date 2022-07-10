<?php
date_default_timezone_set('UTC');
session_start();

include("control/control.php");
include("control/function.php");
include("control/global.php");

include("modules/user.php");
include("modules/transaction.php");
include("modules/contact.php");
include("modules/message.php");

$_URL = config("api");
//$_CONN = connection($_HOST);
u();
exit;

$host = HOST_DB;
$username = USR_DB;
$password = PWD_DB;
$dbname = NAME_DB;
try {
   // $host ="sql.qshark.ml";
   // $username="quaye";
   // $password="quaye8282";
   // $dbname = "sms247box";
    $_CONN = new PDO("mysql:host=$host;
        dbname=$dbname", 
        $username,
        $password
    );
    
    $_CONBO_WALLET = "";
        if(!isset($_REQUEST['submit'])){
            if(!isset($_REQUEST['page'])){
                if($_SERVER['HTTP'] === config("domain")){
                    if(!isset($_REQUEST['cp'])){
                        if(!isset($_REQUEST['client'])){
                            session_destroy();
                            unset($_COOKIE);
                            require($_PAGE['login']);
                            exit(0);
                        }else{
                            require($_MODULES['client']);
                        }
                    }else{
                        require($_MODULES['admin']);
                    }
                }else{
                    $json = array(
                        "time"=>time(),
                        "site"=>$_SERVER['HTTP_HOST'],
                        "key"=>config("key")

                    );
                    require($_PAGE['503']);
                    exit(0);
                }
            }else{
                require($_MODULES['page']);
            }
        }else{
            require($_MODULES['modules']);
        }  
}catch(PDOException $e) {
    echo 'PDO Connection: ',  $e->getMessage();
}
$_CONN = null;
$_REQUEST = null;
?>
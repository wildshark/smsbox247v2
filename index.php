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
include("modules/token.php");
$_URL = config("api");
$host = "localhost";
$username = "root";
$password = "";
$dbname = "";

try {

    if(false == config("connection")){
        $_CONN = new PDO('sqlite:install/sms.db');
    }else{
        $_CONN = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
    }
    $_CONBO_WALLET = "";
    if(!isset($_REQUEST['submit'])){
        if(!isset($_REQUEST['page'])){
           // UserSession($_SERVER['HTTP_HOST']);
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
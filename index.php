<?php
session_start();

include("control/global.php");
include("control/control.php");
include("control/function.php");

include("modules/user.php");
include("modules/transaction.php");
include("modules/contact.php");

$_URL = config("api");

$host = $server['host'];
$dbname = $server['dbname'];
$username = $server['user'];
$password = $server['pwd'];

try {
    $_CONN = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if(!isset($_REQUEST['submit'])){
        if(!isset($_REQUEST['page'])){
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

?>
<?php
session_start();

include("control/global.php");
include("control/control.php");
include("control/function.php");

if(!isset($_REQUEST['submit'])){
    if(!isset($_REQUEST['page'])){
        if(!isset($_REQUEST['_cp'])){
            if(!isset($_REQUEST['_main'])){
                session_destroy();
                require($_PAGE['login']);
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

?>
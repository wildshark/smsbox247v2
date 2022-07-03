<?php
if(!isset($_SESSION['token'])){
    $_SESSION['token'] = $_REQUEST['token'];
}
$_SESSION['portal'] ="cp";
$_PAGE['menu'] = "admin/menu.php";
switch($_REQUEST['cp']){

    case"dashboard";
        require($_PAGE['dashboard']);
    break;

    case"user";
        $profile  = UserAccount::profile($_CONN,"*.all");
        $view = "admin/profile.php";
        require($_PAGE['table']);
    break;

    case"ledger";
        $ledger = Transaction::balance($_CONN,"*.all");
        $view = "admin/ledger.php";
        require($_PAGE['table']);
    break;

    case"payment";

    break;
}

?>
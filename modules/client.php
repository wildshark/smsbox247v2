<?php

if(!isset($_SESSION['token'])){
    $_SESSION['token'] = $_REQUEST['token'];
}
$_SESSION['portal'] = "client";
$_PAGE['menu'] = "client/menu.php";
$_PAGE['modal'] = "client/modal.php";
switch($_REQUEST['client']){

    case"dashboard";
        require($_PAGE['dashboard']);
    break;

    case"profile";
        $profile  = UserAccount::profile($_CONN,$_SESSION['uID']);
        $view = "client/profile.php";
        require($_PAGE['table']);
    break;

    case"ledger";
        $ledger = Transaction::balance($_CONN,$_SESSION['uID']);
        $view = "client/ledger.php";
        require($_PAGE['table']);
    break;

    case"contact";
        $BulkContact = Contact::List($_CONN,$_SESSION['uID']);
        $view = "client/contact.php";
        require($_PAGE['table']);
    break;

    case"";

    break;
}

?>
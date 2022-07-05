<?php

if(!isset($_SESSION['token'])){
    $_SESSION['token'] = $_REQUEST['token'];
}

if(!isset($_SESSION['uID'])){
    header("location : ?user=user-zero");
    exit(0);
}

$_SESSION['portal'] = "client";
$_PAGE['menu'] = "client/menu.php";
$_PAGE['modal'] = "client/modal.php";
$cmbGroupContact = Contact::List($_CONN,$_SESSION['uID']);

$t = Transaction::balance($_CONN,$_SESSION['uID']);
$balance ="Available SMS " .number_format($t['bal'],2)." GHS";

switch($_REQUEST['client']){

    case"dashboard";
        $title = "Dashboard";
        $logs = UserAccount::EventLogs($_CONN,$_SESSION['uID']);
        $view = "client/dashboard.php";
        require($_PAGE['dashboard']);
    break;

    case"profile";
        $title = "Profile";
        $profile  = UserAccount::profile($_CONN,$_SESSION['uID']);
        $view = "client/profile.php";
        require($_PAGE['form']);
    break;

    case"group";
        $title = "Group Contact";
        $group = Contact::List($_CONN,$_SESSION['uID']);
        $view = "client/group.php";
        require($_PAGE['table']);
    break;

    case"contact";
        $title ="Contact  List";
        $_SESSION['gID'] = $_GET['contact'];
        $contact = Contact::View($_CONN,$_GET['contact']);
        $view = "client/contact.php";
        require($_PAGE['table']);
    break;

    case"ledger";
        $title ="TopUp";
        $transaction = Transaction::ledger($_CONN,$_SESSION['uID']);
        $view = "client/transaction.php";
        require($_PAGE['table']);
    break;

    case"sms-log";
        $title ="SMS Log";
        $smsLog = Message::ViewLog($_CONN,$_SESSION['uID']);
        $view = "client/smslog.php";
        require($_PAGE['table']);
    break;

    case"delete";
        if($_REQUEST['ui'] === "group"){
            $delete = Contact::delete($_CONN,$_REQUEST['id']);
            if($delete == false){
                header("location: ?client=group&err=fail");
            }else{
                header("location: ?client=group&err=success");
            }
        }elseif($_REQUEST['ui'] === "contact"){
            $delete = Contact::updateList($_CONN,"delete",$_REQUEST['id']);
            if($delete == false){
                header("location: ?client=group&err=fail");
            }else{
                header("location: ?client=group&err=success");
            }
        }
    break;
}

?>
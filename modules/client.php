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
$cmbGroupContact = Contact::AddressList($_CONN,$_SESSION['uID']);

$t = Transaction::balance($_CONN,$_SESSION['uID']);
$balance ="Available SMS " .number_format($t['bal'],2)." GHS";
$uMenu = UserMenu();
$user_profile_menu = "user.menu.php";

switch($_REQUEST['client']){

    case"auth";
        if(!isset($_SESSION['authID'])){
            header("location: ?user=auth-zero");
            exit(0);
        }
        echo $_SESSION['authID'];
        require($_PAGE['auth']);
    break;

    case"dashboard";
        $title = "Dashboard";
        $logs = UserAccount::EventLogs($_CONN,$_SESSION['uID']);
        $view = "client/dashboard.php";
        require($_PAGE['dashboard']);
    break;

    case"profile";
        $title = "Profile";
        $profile  = UserAccount::profile($_CONN,$_SESSION['uID']);
        if($profile == false){
            $profile['account'] = "";
            $profile['full_name'] = "";
            $profile['company'] = "";
            $profile['mobile'] = "";
            $profile['email'] = "";
            $profile['address'] = "";
            $profile['country'] = "";
            $profile['city'] = "";
            $profile['zip'] = "";
            $profile['username'] = "";
            $profile['password'] = "";
        }
        $btn['action']="update-profile";
        $btn['caption']="Save";

        $btn2['action']="change-password";
        $btn2['caption']="Save";

        $view = "client/profile.php";
        require($_PAGE['form']);
    break;

    case"topup";
        $title = "Topup";
        $ref = time();
        $orders = Transaction::getOreder($_CONN,$_SESSION['uID']);
        $view = "client/topup.php";
        require($_PAGE['form']);
    break;

    case"group";
        $title = "Group Contact";
        $group = Contact::AddressList($_CONN,$_SESSION['uID']);
        $view = "client/group.php";
        require($_PAGE['table']);
    break;

    case"contact";
        $title ="Contact  List";
        if(!isset($_GET['contact'])){
            $_GET['contact'] = null;
        }else{
             $_SESSION['gID'] = $_GET['contact'];
        }
        $myContact = Contact::View($_CONN,$_GET['contact']);
        if($myContact == false){
            $myContact = null;
        }
        $view = "client/contact.php";
        require($_PAGE['table']);
    break;

    case"ledger";
        $title ="TopUp";
        $transaction = Transaction::ledger($_CONN,$_SESSION['uID']);
        $view = "client/transaction.php";
        require($_PAGE['table']);
    break;

    case"schedule";
        $title ="Schedule SMS";
        $schedule = Message::ListSchedule($_CONN,$_SESSION['uID']);
        $view = "client/schedule.php";
        require($_PAGE['table']);
    break;

    case"sms-log";
        $title ="SMS Log";
        $smsLog = Message::ViewLog($_CONN,$_SESSION['uID']);
        $view = "client/smslog.php";
        require($_PAGE['table']);
    break;

    case"token";
        $title = "API Token";
        $data = tokenz::getList($_CONN,$_SESSION['uID']);
        $view = "client/token.php";
        require($_PAGE['table']);
    break;

    case"delete";
        if($_REQUEST['ui'] === "group"){
            $delete = Contact::delete($_CONN,$_REQUEST['id']);
            if($delete == false){
                header("location: ?client=group&err=2028");
            }else{
                header("location: ?client=group&err=2027");
            }
        }elseif($_REQUEST['ui'] === "contact"){
            $delete = Contact::updateList($_CONN,"delete",$_REQUEST['id']);
            if($delete == false){
                header("location: ?client=group&err=2028");
            }else{
                header("location: ?client=group&err=2027");
            }
        }
    break;

    case"pos-terminal";
        $or = Transaction::ViewOrder($_CONN,$_GET['or']);
        $id = $_GET['or'];
        $name = $or['full_name']; 
        $name = explode(" ",$name);
        $fname = $name[0];
        $sname = $name[1];
        $email = $or['email'];
        $mobile = $or['mobile'];
        $ref = "SMS-".$or['ref'];
        $currency = $or['currency'];
        $amt = $or['amount'];
        require("control/paystack.php");
    break;
}

?>
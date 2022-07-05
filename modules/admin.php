<?php
if(!isset($_SESSION['token'])){
    $_SESSION['token'] = $_REQUEST['token'];
}
$_SESSION['portal'] ="cp";
$_PAGE['menu'] = "admin/menu.php";
$_PAGE['modal'] = "admin/modal.php";
$balance ="0.00 GHS";
switch($_REQUEST['cp']){

    case"dashboard";
        $title ="Dashboard";
        $client = UserAccount::total($_CONN);
        $clientBal = Transaction::balance($_CONN,"global-balance");
        $clientBal =  $clientBal['bal'];
        $view ="admin/dashboard.php";
        require($_PAGE['dashboard']);
    break;

    case"user";
        $title ="User Profile";
        $profile  = UserAccount::profile($_CONN,"*.all");
        $view = "admin/profile.php";
        require($_PAGE['table']);
    break;

    case"ledger";
        $title ="User Account";
        $ledger = Transaction::balance($_CONN,"*.all");
        $view = "admin/ledger.php";
        require($_PAGE['table']);
    break;

    case"ledger-details";
        $_SESSION['uID'] = $_GET['u'];
        $profile = UserAccount::profile($_CONN,$_GET['u']);
        $summary = Transaction::balance($_CONN,$_GET['u']);
        $details = Transaction::general_ledger($_CONN,$_GET['u']);
        $title ="Account : ". $profile['account'];
        $view = "admin/ledger.details.php";
        require($_PAGE['table']);
    break;
}

?>
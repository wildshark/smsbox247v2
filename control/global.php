<?php
$_PAGE_TITLE ="BernsergSolutionsSMS";
$_PAGE_LOGO = "";
$_PAGE_META =  "fasto : sass Admin Dashboard  Bootstrap 5 Template";
$_PAGE_CR = "Licensed to  Bernserg Solutions  2022 &amp; Developed by <a href='https://iquipedigital/' target='_blank'>iQuipe Digital</a>";

$domain = config("domain");
$senderID = "";
//$_CONBO_CURR = currencies(config("currency"));
//$_CONBO_WALLET = wallet(config("wallet"));
$_HOST  = [
    "host" => "localhost",
    "user" => "root",
    "pwd" => "",
    "dbname" => "sms247box"
];

$_PAGE = [
    "login"=>"frame/login.php",
    "signup"=>"frame/signup.php",
    "reset"=>"frame/reset.php",
    "dashboard"=>"frame/dashboard.php",
    "table"=>"frame/table.php",
    "form"=>"frame/form.php",
    "403"=>"frame/403.php",
    "404"=>"frame/404.php",
    "503"=>"frame/503.php",
    "activition"=>"frame/activition.php",
    "auth"=>"frame/auth.php"
];

$_MODULES = [
    "admin"=>"modules/admin.php",
    "client"=>"modules/client.php",
    "page"=>"modules/page.php",
    "modules"=>"modules/modules.php"
];

$profile['account'] = "";
$profile['full_name'] = "";
$profile['company'] = "";
$profile['mobile'] = "";
$profile['email'] = "";
$profile['address'] = "";
$profile['country'] = "";
$profile['state'] = "";
$profile['zip'] = "";
$profile['username'] = "";
$profile['password'] = "";

$btn['goback'] = goBack();
$btn['action'] = "";
$btn['caption'] = "";

$btn2['action'] = "";
$btn2['caption'] = "";

function AdminMenu(){

    $user = $_SESSION['username'];
    $account = $_SESSION['account'];
    $portal = $_SESSION['portal'];
    return"
    <a class='nav-link' href='javascript:void(0);' role='button' data-bs-toggle='dropdown'>
        <img src='images/profile/pic1.jpg' width='20' alt=''/>
        <div class='header-info'>
            <span>$user</span>
            <small>$account</small>
        </div>
    </a>
    <div class='dropdown-menu dropdown-menu-end'>
        <a href='?$portal=profile&ui=update&id=admin' class='dropdown-item ai-icon'>
            <svg id='icon-user1' xmlns='http://www.w3.org/2000/svg' class='text-primary' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg>
            <span class='ms-2'>Profile </span>
        </a>
        <!--a href='?$portal=ledger' class='dropdown-item ai-icon'>
            <svg id='icon-inbox' xmlns='http://www.w3.org/2000/svg' class='text-success' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z'></path><polyline points='22,6 12,13 2,6'></polyline></svg>
            <span class='ms-2'> TopUp </span>
        </a-->
        <a href='?user=logout' class='dropdown-item ai-icon'>
            <svg id='icon-logout' xmlns='http://www.w3.org/2000/svg' class='text-danger' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4'></path><polyline points='16 17 21 12 16 7'></polyline><line x1='21' y1='12' x2='9' y2='12'></line></svg>
            <span class='ms-2'>Logout </span>
        </a>
    </div>";
}

function UserMenu(){

    $user = $_SESSION['username'];
    $account = $_SESSION['account'];
    $portal = $_SESSION['portal'];
    return"
    <a class='nav-link' href='javascript:void(0);' role='button' data-bs-toggle='dropdown'>
        <img src='images/profile/pic1.jpg' width='20' alt=''/>
        <div class='header-info'>
            <span>$user</span>
            <small>$account</small>
        </div>
    </a>
    <div class='dropdown-menu dropdown-menu-end'>
        <a href='?$portal=profile' class='dropdown-item ai-icon'>
            <svg id='icon-user1' xmlns='http://www.w3.org/2000/svg' class='text-primary' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg>
            <span class='ms-2'>Profile </span>
        </a>
        <a href='?$portal=ledger' class='dropdown-item ai-icon'>
            <svg id='icon-inbox' xmlns='http://www.w3.org/2000/svg' class='text-success' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z'></path><polyline points='22,6 12,13 2,6'></polyline></svg>
            <span class='ms-2'> TopUp </span>
        </a>
        <a href='?user=logout' class='dropdown-item ai-icon'>
            <svg id='icon-logout' xmlns='http://www.w3.org/2000/svg' class='text-danger' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4'></path><polyline points='16 17 21 12 16 7'></polyline><line x1='21' y1='12' x2='9' y2='12'></line></svg>
            <span class='ms-2'>Logout </span>
        </a>
    </div>";
}

function currency(){

    $currencies =["USD","GHC"];

}

function MessageBox(){

    if(!isset($_GET['err'])){
        $MsgBox ="";
    }else{
        switch($_GET['err']){

            case 2001;
                $title ="Error!";
                $msg = "Change password failed.";
                $css = "alert-danger";
            break;

            case 2002;
                $title ="Success!";
                $msg = "Change password Successful.";
                $css = "alert-success";
            break;

            case 2003;
                $title ="Informaation!";
                $msg="Your fund is low, topup and try again.";
                $css = "alert-info";
            break;

            case 2004;
                $title ="Error!";
                $msg="Unable to credit account.";
                $css = "alert-danger";
            break;

            case 2005;
                $title ="Success!";
                $msg = "Message send Successful.";
                $css = "alert-success";
            break;

            case 2006;
                $title ="Error!";
                $msg = "Upload contact file failed.";
                $css = "alert-danger";
            break;

            case 2007;
                $title ="Success!";
                $msg ="Upload Contact file successful.";
                $css = "alert-success";
            break;

            case 2008;
                $title ="Error!";
                $msg ="Please select valid file.";
                $css = "alert-danger";
            break;

            case 2009;
                $title ="Error!";
                $msg ="Account Topup failed, try again later.";
                $css = "alert-danger";
            break;

            case 2010;
                $title ="Success";
                $msg ="Topup account successful.";
                $css = "alert-success";
            break;

            case 2011;
                $title ="Error!";
                $msg ="System fail creating schedule. Try again later.";
                $css = "alert-danger";
            break;

            case 2012;
                $title ="Success!";
                $msg ="Schedule created successful.";
                $css = "alert-success";
            break;

            case 2013;
                $title ="Error!";
                $msg ="Update profile failed.";
                $css = "alert-danger";
            break;

            case 2014;
                $title ="Success!";
                $msg ="Update profile successful.";
                $css = "alert-success";
            break;

            case 2015;
                $title ="Error!";
                $msg ="System failed to send sms. Try aagain later.";
                $css = "alert-danger";
            break;

            case 2016;
                $title ="Error!";
                $msg ="Process sms schedule failed. Try aagain later.";
                $css = "alert-danger";
            break;

            case 2017;
                $title ="Success!";
                $msg ="Process sms schedule successful.";
                $css = "alert-success";
            break;

            case 2018;
                $title ="Error!";
                $msg ="User already exist.";
                $css = "alert-warning";
            break;

            case 2019;
                $title ="Success!";
                $msg ="Account created successful.";
                $css = "alert-success";
            break;

            case 2020;
                $title ="Error!";
                $msg ="Can not create account. Try again later.";
                $css = "alert-warning";
            break;

            case 2021;
                $title ="Error!";
                $msg ="User account do not exist.";
                $css = "alert-danger";
            break;

            case 2022;
                $title ="Error!";
                $msg ="Transaction failed. Try again later.";
                $css = "alert-danger";
            break;

            case 2023;
                $title ="Success!";
                $msg ="Transaction successful.";
                $css = "alert-success";
            break;

            case 2024;
                $title ="Success!";
                $msg ="System failure. Try again later.";
                $css = "alert-success";
            break;

            case 2025;
                $title ="Success!";
                $msg ="Profile removed";
                $css = "alert-success";
            break;

            case 2026;
                if($_REQUEST['block'] == 1){
                    $title ="Success!";
                    $msg ="User Account has be unblock";
                    $css = "alert-success";
                }elseif($_REQUEST['block'] == 2){
                    $title ="Success!";
                    $msg ="User Account has be block";
                    $css = "alert-success";
                }
            break;

            case 2027;
                $title ="Success!";
                $msg ="Remove contact";
                $css = "alert-success";
            break;

            case 2028;
                $title ="Error!";
                $msg ="Remove contact failed.";
                $css = "alert-danger";
            break;

            case 2029;
                $title ="Success!";
                $msg ="Token created";
                $css = "alert-success";
            break;

            case 2030;
                $title ="Error!";
                $msg ="failed to create token.";
                $css = "alert-danger";
            break;

            case 2031;
                $title ="Error!";
                $msg ="failed to delete token. try again later";
                $css = "alert-danger";
            break;

            case 2032;
                $title ="Success!";
                $msg ="Token deleted successful";
                $css = "alert-success";
            break; 

        }
        $MsgBox ="
            <div class='alert $css solid alert-dismissible fade show'>
                <svg viewBox='0 0 24 24' width='24' height='24' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round' class='me-2'><circle cx='12' cy='12' r='10'></circle><path d='M8 14s1.5 2 4 2 4-2 4-2'></path><line x1='9' y1='9' x2='9.01' y2='9'></line><line x1='15' y1='9' x2='15.01' y2='9'></line></svg>
                <strong>$title</strong> $msg
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='btn-close'>
                </button>
            </div>
        ";
    }

    return $MsgBox;
}

?>
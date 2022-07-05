<?php

$_HOST  = [
    "host" => "localhost",//"sql.qshark.ml",
    "user" => "root",//"quaye",
    "pwd" => "",//"quaye8282",
    "dbname" => "sms247box"
];

$_PAGE = [
    "login"=>"frame/login.php",
    "signup"=>"frame/signup.php",
    "reset"=>"frame/reset.php",
    "dashboard"=>"frame/dashboard.php",
    "table"=>"frame/table.php",
    "form"=>"frame/form.php"
];

$_MODULES = [
    "admin"=>"modules/admin.php",
    "client"=>"modules/client.php",
    "page"=>"modules/page.php",
    "modules"=>"modules/modules.php"
];

function UserMenu(){

    $user = $_COOKIE['username'];
    $account = $_COOKIE['account'];
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
                $msg ="Account Topup failed, try again later";
                $css = "alert-danger";
            break;

            case 2010;
                $title ="Success";
                $msg ="Topup account successful.";
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
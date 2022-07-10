<?php
if(!isset($smsBalance)){
   $smsBalance = GatewayBalanceSMS(); 
}
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
        $order = Transaction::totalOrder($_CONN);
        $clientBal = Transaction::balance($_CONN,"global-balance");
        $clientBal =  $clientBal['bal'];
        $NewOrders = Transaction::ListOrders($_CONN,"pending",false);
        $view ="admin/dashboard.php";
        require($_PAGE['dashboard']);
    break;

    case"profile";
        if($_GET['ui'] == "create"){
            $title ="Create Account";
            $view = "admin/profile.details.php";
            require($_PAGE['form']);
        }elseif($_GET['ui'] == "update"){
            $title ="User Profile";
            $profile  = UserAccount::profile($_CONN,"*.all");
            $view = "admin/profile.details.php";
            require($_PAGE['form']);
        }elseif($_GET['ui'] ==="client"){ 
            $title ="User Profile";
            $_SESSION['ui'] ="client";
            $profile  = UserAccount::profile($_CONN,"client");
            $view = "admin/profile.php";
            require($_PAGE['table']);
        }elseif($_GET['ui'] ==="admin"){
            $title ="Administrator Profile";
            $_SESSION['ui'] = "admin";
            $profile  = UserAccount::profile($_CONN,"admin");
            $view = "admin/profile.php";
            require($_PAGE['table']);
        }elseif($_GET['ui'] === "delete"){
            if(false == UserAccount::RemoveProfile($_CONN,$_GET['id'])){
                header("location: ?cp=profile&err=2024&ui=".$_SESSION['ui']);
            }else{
                header("location: ?cp=profile&err=2025&ui=".$_SESSION['ui']);
            }
        }
    break;

    case"user";
        $title ="User Profile";
        $profile  = UserAccount::profile($_CONN,"*.all");
        $view = "admin/profile.php";
        require($_PAGE['table']);
    break;

    case"orders";
        if(!isset($_GET['action'])){
            $title ="Orders";
            $pending = Transaction::ListOrders($_CONN,"pending",false);
            $aproved = Transaction::ListOrders($_CONN,"approved",false);
            $view = "admin/orders.php";
            require($_PAGE['table']);
        }else{
            if($_GET['action'] === "aprove"){
                $order = Transaction::ViewOrder($_CONN,$_GET['id']);
                if($order == false){
                    header("location: ?cp=orders&err=2022");                  
                }else{
                    $_RER[] = $_GET['id'];
                    $_RER[] = $order['ref'];
                    $_RER[] = "Make payment";
                    $_RER[] = $order['amount']; 
                    if(TRUE == Transaction::debit($_CONN,$_RER)){
                        if(FALSE == Transaction::ApproveOrders($_CONN,$_GET['id'])){
                            header("location: ?cp=orders&err=2022");                  
                        }else{
                            header("location: ?cp=orders&err=2023");                  
                        }
                    }else{
                        header("location: ?cp=orders&err=2022");
                    }
                }
            }elseif($_GET['action'] ==="remove"){

            }
        }
        
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

    case"api-token";
        require($_PAGE['403']);
    break;

    default:
        require($_PAGE['404']);
}

?>
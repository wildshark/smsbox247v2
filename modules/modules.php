<?php

switch($_REQUEST['submit']){

    case"activition";
        $ref = "ACTIVE-".time();
        $amt = 200;
        $currency ="USD";
        $id = 100;
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $name = $_REQUEST['name'];
        require("control/payment.php");
    break;

    case"login";
        $admin = config("admin");
        if(($_REQUEST['username'] != $admin->username) ||($_REQUEST['password'] != $admin->password)){
            $response = UserAccount::login($_CONN,$_REQUEST);
            if($response == false){
               $url['_user'] = "user-zero"; 
            }else{
                $json = [
                    "username"=>$_REQUEST['username'],
                    "password"=>$_REQUEST['password']
                ];
                $_SESSION['uID'] = $response['userID'];
                $_SESSION['username'] = $response['username'];
                $_SESSION['account'] = $response['account'];
                $token = md5(json_encode($json));
                $token = password_hash($token,PASSWORD_DEFAULT);
                setcookie("token",$token);
                setcookie("username",$response['username']);
                setcookie("account",$response['account']);

                $_LOG[] = $_SESSION['uID'];
                $_LOG[] = "User Logged In";
                $_LOG[] = "info";
                $log = UserAccount::AddEventLog($_CONN,$_LOG);
                if($response['role'] === "admin"){
                    $url['cp'] = "dashboard";
                    $url['token'] = md5($token); 
                }else{
                    $_SESSION['authID'] = rand(1000,9999);
                    __GatewaySendSMS($response['mobile'],"bernserg","Your access code: ".$_SESSION['authID']);
                    $url['client'] = "auth";
                    $url['token'] = md5($token); 
                    $url['u'] = $_SESSION['authID'];
                }
            } 
        }else{
            $json = [
                "username"=>$_REQUEST['email'],
                "password"=>$_REQUEST['password']
            ];
            $_SESSION['uID'] = "admin";
            $_SESSION['username'] = "admin";
            $_SESSION['account'] = "Admin Portal";
            $token = md5(json_encode($json));
            $token = password_hash($token,PASSWORD_DEFAULT);
            setcookie("token",$token);
            setcookie("username","admin");
            setcookie("account","Admin Portal");
            $url['cp'] = "dashboard";
            $url['token'] = md5($token);
        }
    break;

    case"auth";
        if(!isset($_SESSION['authID'])){
            $url['user'] = "auth";
            $url['status'] = false;
        }else{
            if($_SESSION['authID'] != $_REQUEST['auth-code']){
                $url['user'] = "auth";
                $url['status'] = "no-match";
            }else{
                $url['client'] = "dashboard";
                $url['token'] = md5($_COOKIE['token']);
            }
        }
    break;

    case"reset-password";
        if(!isset($_REQUEST['email'])){
            $url['page'] = "reset";
        }else{
            if(false == UserAccount::VerifyProfile($_CONN,"email",$_REQUEST['email'])){
                $url['page'] = "reset";
                $url['status'] = "email-verify-false";
            }else{
                $pwd = uniqid();
                $email = $_REQUEST['email'];
                if(false == UserAccount::VerifyProfile($_CONN,"email",$email)){
                    $url['page'] = "reset";
                    $url['status'] = "password-reset-false";
                }else{
                    $response = UserAccount::ForgetPassword($_CONN,$pwd,$email);
                    $destination = $response['mobile'];
                    $sendID = "benseg";
                    $msg = "Your new password ".$pwd;
                    if(false == __GatewaySendSMS($destination,$sendID,$msg)){
                        $url['page'] = "login";
                        $url['status'] ="sms-0";
                    }else{
                        $url['page'] = "login";
                        $url['status'] ="password-reset";
                    }
                }
            }
        }
    break;

    case"signup";
        if(false == UserAccount::VerifyProfile($_CONN,"mobile",$_REQUEST['mobile'])){
            if(false == UserAccount::VerifyProfile($_CONN,"email",$_REQUEST['email'])){
                $response = UserAccount::register($_CONN,$_REQUEST);
                if($response == false){
                    $url['_user'] = "signup-failed";
                }else{
                    $json = [
                        "username"=>$response['email'],
                        "password"=>$response['password']
                    ];
                    $_SESSION['uID'] = $response['userID'];
                    $_SESSION['username'] = $response['username'];
                    $_SESSION['account'] = $response['account'];
                    $token = md5(json_encode($json));
                    $token = password_hash($token,PASSWORD_DEFAULT);
                    setcookie("token",$token);
                    setcookie("username",$response['username']);
                    setcookie("account",$response['account']);

                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "User Sign Up";
                    $_LOG[] = "info";
                    $log = UserAccount::AddEventLog($_CONN,$_LOG);

                    $url['client'] = "dashboard";
                    $url['token'] = md5($token); 
                }
            }else{
                $url['page'] = "register";
                $url['err'] = "your already exist";
            }
        }else{
            $url['page'] = "register";
            $url['err'] = "your already exist";
        }
    break;

    case"create-user-account";
        $json = [
            "username"=>$_REQUEST['email'],
            "password"=>$_REQUEST['password']
        ];
        $token = md5(json_encode($json));
        $token = password_hash($token,PASSWORD_DEFAULT);
        
        $verifyMobile = UserAccount::VerifyProfile($_CONN,"mobile",$_REQUEST['mobile']);
        $verifyEmail = UserAccount::VerifyProfile($_CONN,"email",$_REQUEST['email']);

        if(($verifyEmail == TRUE)||($verifyMobile == TRUE)){
            $url['cp'] = "profile";
            $url['ui'] = $_SESSION['ui'];
            $url['err'] = 2018;
        }else{
            $q[] = time();
            $q[] = $_REQUEST['username'];
            $q[] = $_REQUEST['password'];
            $q[] = $_REQUEST['email'];
            $q[] = $_REQUEST['mobile'];
            $q[] = $token;
            $q[] = $_REQUEST['account-type'];
            if(false == UserAccount::AddProfile($_CONN,$q)){
                $url['cp'] = "profile";
                $url['ui'] = $_SESSION['ui'];
                $url['err'] = 2020;
            }else{
                $url['cp'] = "profile";
                $url['ui'] = $_SESSION['ui'];
                $url['err'] = 2019;
            }
        }
    break;

    case"update-profile";
        
        $q[] = $_REQUEST['full_name'];
        $q[] = $_REQUEST['mobile'];
        $q[] = $_REQUEST['address'];
        $q[] = $_REQUEST['company'];
        $q[] = $_REQUEST['country'];
        $q[] = $_REQUEST['city'];
        $q[] = $_REQUEST['zip'];
        $q[] = $_SESSION['uID'];
        $response = UserAccount::UpdateProfile($_CONN,$q);
        if($response == false){
            $url['client'] = "profile";
            $url['err'] = 2013;
            $url['id'] = $_SESSION['uID'];
        }else{
            $url['client'] = "profile";
            $url['err'] = 2014;
            $url['id'] = $_SESSION['uID'];
        }
    break;

    case"update-client-profile";
        $q[] = $_REQUEST['full_name'];
        $q[] = $_REQUEST['mobile'];
        $q[] = $_REQUEST['address'];
        $q[] = $_REQUEST['company'];
        $q[] = $_REQUEST['country'];
        $q[] = $_REQUEST['city'];
        $q[] = $_REQUEST['zip'];
        $q[] = $_SESSION['uID'];
        $response = UserAccount::UpdateProfile($_CONN,$q);
        if($response == false){
            $url['cp'] = "profile";
            $url['err'] = 2013;
            $url['id'] = $_SESSION['uID'];
        }else{
            $url['cp'] = "profile";
            $url['err'] = 2014;
            $url['id'] = $_SESSION['uID'];
        }
    break;

    case"change-password";
        $_PWD[] = $_REQUEST['password'];
        $_PWD[] = $_SESSION['uID'];
        if(false == UserAccount::ChangePassword($_CONN,$_PWD)){
            $url['client'] = "profile";
            $url['err'] = 2001;
        }else{
            $url['client'] = "profile";
            $url['err'] = 2002;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "Change Password";
            $_LOG[] = "info";
            $log = UserAccount::AddEventLog($_CONN,$_LOG);
        }
    break;

    case"change-client-password";
        $_PWD[] = $_REQUEST['password'];
        $_PWD[] = $_SESSION['uID'];
        if(false == UserAccount::ChangePassword($_CONN,$_PWD)){
            $url['cp'] = "profile";
            $url['ui'] ="update";
            $url['id'] = $_SESSION['uID'];
            $url['err'] = 2001;
        }else{
            $url['cp'] = "profile";
            $url['ui'] ="update";
            $url['id'] = $_SESSION['uID'];
            $url['err'] = 2002;
        }
    break;

    case"quick-topup-account";
        if(false == UserAccount::VerifyProfile($_CONN,"mobile",$_REQUEST['account'])){
            if(false == UserAccount::VerifyProfile($_CONN,"email",$_REQUEST['account'])){
                if(false == UserAccount::VerifyProfile($_CONN,"account",$_REQUEST['account'])){
                    $url['cp'] = "dashboard";
                    $url['err'] = 2021;
                    header("location: ?".http_build_query($url));
                    exit;
                }
            }
        }

        $ref = time();
        $q[] = date("Y-m-d H:i:s");
        $q[] = $_SESSION['verifyID'];
        $q[] = $ref;
        $q[] = $_REQUEST['details'];
        $q[] = $_REQUEST['amount'];
        $response = Transaction::debit($_CONN,$q);
        if($response === false){
            $url['cp'] = "dashboard";
            $url['err'] = 2022;
        }else{
            $url['cp'] = "ledger";
            $url['err'] = 2023;
        }
    break;

    case"quick-sms";
        
        $to_mobile= $_REQUEST['to-mobile'];
        $msg = $_REQUEST['message'];

        if(!isset($_REQUEST['sender-id'])){
            $senderID ="smsbox";
        }else{
            $senderID = $_REQUEST['sender-id'];
        }
        $sms[] = $_SESSION['uID'];
        $sms[] = date("d-m-y H:i:s");
        $sms[] = $_REQUEST['to-mobile'];
        $sms[] = $_REQUEST['sender-id'];
        $sms[] = $_REQUEST['message'];
        $sms[] = "pending"; 
        $sms = Message::add_message($_CONN,$sms); 
        if (preg_match('/,/', $to_mobile)) {
            // string contains characters other than |
            $m = explode(",",$to_mobile);
            $total = count($m);
        }elseif(preg_match('/;/', $to_mobile)){
            $m = explode(";",$to_mobile);
            $total = count($m);
        }else{
            $m = $_REQUEST['to-mobile'];
            $total = 1;
        }
        //sms gatewaye
        $legder = Transaction::balance($_CONN,$_SESSION['uID']);
        if($legder['bal'] < 1){
            $url['client'] = "dashboard";
            $url['err'] = 2003;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "Insufficient funds";
            $_LOG[] = "warning";
        }else{
            $price = config("price");
            $amt = $total * $price;
            $CR[] = date("Y-m-d H:i:s");
            $CR[] = $_SESSION['uID'];
            $CR[] = time();
            $CR[] = "Send $total SMS @ $price GHS";
            $CR[] = $amt;
            $legder = Transaction::credit($_CONN,$CR);
            if($legder == false){
                $url['client'] = "dashboard";
                $url['err'] = 2004;
            }else{
                //send ssms
                $SendQuickSMS = __GatewaySendSMS($to_mobile,$senderID,$msg);
                
                if(false == $SendQuickSMS){
                    $url['client'] = "dashboard";
                    $url['err'] = 2015;
                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "Send SMS Unsuccessful";
                    $_LOG[] = "danger"; 
                }else{
                    
                    $_SMS[] = $_SESSION['uID'];
                    $_SMS[] = $to_mobile;
                    $_SMS[] = $msg;
                    $smslog = Message::Log($_CONN,$_SMS);

                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "Send SMS Successful";
                    $_LOG[] = "success"; 
                    
                    $url['client'] = "dashboard";
                    $url['err'] = 2005;
                }
            }
        }    
        $log = UserAccount::AddEventLog($_CONN,$_LOG);
    break;

    case"bulk-sms";
        $_ID = $_REQUEST['to-group'];
        $msg = $_REQUEST['message'];
        $sender = $_REQUEST['sender-id'];
        $mobile = Contact::View($_CONN,$_REQUEST['to-group']);
        $total = count($mobile);
        $to_mobile = format_mobile_num($mobile);
        //sms gatewaye
        $legder = Transaction::balance($_CONN,$_SESSION['uID']);
        if($legder['bal'] < 1){
            $url['client'] = "dashboard";
            $url['err'] = 2003;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "Insufficient funds";
            $_LOG[] = "warning";
        }else{
            $price = config("price");
            $amt = $total * $price;
            $CR[] = $_SESSION['uID'];
            $CR[] = time();
            $CR[] = "Send $total SMS @ $price GHS";
            $CR[] = $amt;
            $legder = Transaction::credit($_CONN,$CR);
            if($legder == false){
                $url['client'] = "dashboard";
                $url['err'] = 2004;
            }else{
                //send ssms
                if(false == __GatewaySendSMS($to_mobile,$senderID,$msg)){
                    $url['client'] = "dashboard";
                    $url['err'] = 2015;

                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "Send SMS failed";
                    $_LOG[] = "success"; 
                }else{
                    $_SMS[] = $_SESSION['uID'];
                    $_SMS[] = $to_mobile;
                    $_SMS[] = $msg;

                    $smslog = Message::Log($_CONN,$_SMS);
                    
                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "Send SMS unsccessful";
                    $_LOG[] = "success"; 
                    
                    $url['client'] = "dashboard";
                    $url['err'] = 2005;
                }
            }
        }    
        $log = UserAccount::AddEventLog($_CONN,$_LOG);
    break;

    case"add-contact";
        $R[] = $_SESSION['uID'];
        $R[] = $_REQUEST['group-name'];
        $response = Contact::addFileName($_CONN,$R);
        if($response == false){
            $url['client'] = "group";
            $url['err'] = 4004;
        }else{
            // Allowed mime types
            $fileMimes = array(
                'text/x-comma-separated-values',
                'text/comma-separated-values',
                'application/octet-stream',
                'application/vnd.ms-excel',
                'application/x-csv',
                'text/x-csv',
                'text/csv',
                'application/csv',
                'application/excel',
                'application/vnd.msexcel',
                'text/plain'
            );
        
            // Validate whether selected file is a CSV file
            if (!empty($_FILES['upload-file']['name']) && in_array($_FILES['upload-file']['type'], $fileMimes))
            {
        
                // Open uploaded CSV file with read-only mode
                $csvFile = fopen($_FILES['upload-file']['tmp_name'], 'r');
        
                // Skip the first line
                fgetcsv($csvFile);
        
                // Parse data from CSV file line by line
                while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE){
                    // Get row data
                    $result = Contact::addList($_CONN,$response,$getData,$_SESSION['uID']);
                        
                }
        
                // Close opened CSV file    
                fclose($csvFile);

                if($result == false){
                    $url['client'] = "contact";
                    $url['contact'] = $response;
                    $url['err'] = 2006;
                    
                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "Upload Contact file failed";
                    $_LOG[] = "warning";
                }else{
                    $url['client'] = "contact";
                    $url['contact'] = $response;
                    $url['err'] = 2007;

                    $_LOG[] = $_SESSION['uID'];
                    $_LOG[] = "Upload Contact file successful";
                    $_LOG[] = "success";
                }
            }else{
                $url['client'] = "contact";
                $url['contact'] = $_SESSION['gID'];
                $url['err'] = 2008;
                //echo "Please select valid file";

                $_LOG[] = $_SESSION['uID'];
                $_LOG[] = "Upload was unsccessful, invalid file";
                $_LOG[] = "danger";
            }

            $log = UserAccount::AddEventLog($_CONN,$_LOG);
        }
    
    break;

    case"topup-account";
        $q[] = $_SESSION['uID'];
        $q[] = time();
        $q[] = $_REQUEST['details'];
        $q[] = $_REQUEST['amount'];
        $response = Transaction::debit($_CONN,$q);
        if($response == false){
            $url['cp']="ledger-details";
            $url['u'] = $_SESSION['uID'];
            $url['err'] = 2009;
        }else{
            $url['cp']="ledger-details";
            $url['u'] = $_SESSION['uID'];
            $url['err'] = 2010;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "TopUp Account";
            $_LOG[] = "success"; 
            $log = UserAccount::AddEventLog($_CONN,$_LOG);
        }
    break;

    case"schedule-sms";
        
        $mobile = Contact::View($_CONN,$_REQUEST['to-group']);
        $total = count($mobile);
        $$destination = format_mobile_num($mobile);
        $total_chr = strlen($_REQUEST['message']);

        $q[] = date("Y-m-d H:i:s");
        $q[] = $_SESSION['uID'];
        $q[] = $ref = uniqid();
        $q[] = $_REQUEST['schedule-date'];
        $q[] = $_REQUEST['schedule-time'];
        $q[] = format_mobile_num($mobile);
        $q[] = $_REQUEST['message'];
        $q[] = $_REQUEST['sender-id'];
        $q[] = $total;
        $q[] = $total_chr;
        $response = Message::AddSchedule($_CONN,$q);
        if($response == false){
            $url['client']="schedule";
            $url['err']=2011;
        }else{
            if(false == __GatewaySchudelSMS($destination,$_REQUEST['sender-id'],$_REQUEST['schedule-date'],$_REQUEST['schedule-time'],$_REQUEST['message'])){
                $url['client']="schedule";
                $url['err']=2016;

                $_LOG[] = $_SESSION['uID'];
                $_LOG[] = "Schedule $ref failed";
                $_LOG[] = "danger";
            }else{
                $url['client']="schedule";
                $url['err']=2017;

                $_LOG[] = $_SESSION['uID'];
                $_LOG[] = "Schedule $ref Created";
                $_LOG[] = "success"; 
            }
            $log = UserAccount::AddEventLog($_CONN,$_LOG);
        }
    break;

    case"make-payment";
        if($_REQUEST['payment-method'] === "card"){
            $curr = "USD";
        }elseif($_REQUEST['payment-method'] === "araknet"){
            $curr = "GHS";
        }
        $ref =time();
        $q[] = $_SESSION['uID'];
        $q[] = $ref;
        $q[] = $curr;
        $q[] = $_REQUEST['amount'];
        $q[] = $_REQUEST['payment-method'];
        $response = Transaction::AddOrders($_CONN,$q);
        if($response === false){
            $url['client'] = "ledger";
            $url['err'] = 2022;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "Order $ref failed";
            $_LOG[] = "danger";

        }else{
            $url['client'] = "pos-terminal";
            $url['ref'] = $ref;
            $url['or'] = $response;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "Place Order $ref Success";
            $_LOG[] = "success"; 
        }
        $log = UserAccount::AddEventLog($_CONN,$_LOG);
    break;
}

header("location: ?".http_build_query($url));
?>
<?php

switch($_REQUEST['submit']){

    case'login';
        $admin = config("admin");
        if(($_REQUEST['username'] != $admin->username) ||($_REQUEST['password'] != $admin->password)){
            $response = UserAccount::login($_CONN,$_REQUEST);
            if($response == false){
               $url['_user'] = "user-zero"; 
            }else{
                $json = [
                    "username"=>$_REQUEST['email'],
                    "password"=>$_REQUEST['password']
                ];
                $_SESSION['uID'] = $response['userID'];
                $token = md5(json_encode($json));
                $token = password_hash($token,PASSWORD_DEFAULT);
                setcookie("token",$token);
                setcookie("username",$response['username']);
                setcookie("account",$response['account']);

                $_LOG[] = $_SESSION['uID'];
                $_LOG[] = "User Logged In";
                $_LOG[] = "info";
                $log = UserAccount::AddEventLog($_CONN,$_LOG);
                $url['client'] = "dashboard";
                $url['token'] = md5($token); 
            } 
        }else{
            $json = [
                "username"=>$_REQUEST['email'],
                "password"=>$_REQUEST['password']
            ];
            $_SESSION['uID'] = "admin";
            $token = md5(json_encode($json));
            $token = password_hash($token,PASSWORD_DEFAULT);
            setcookie("token",$token);
            setcookie("username","admin");
            setcookie("account","Admin Portal");
            $url['cp'] = "dashboard";
            $url['token'] = md5($token);
        }
    break;

    case'signup';
        $response = UserAccount::register($_CONN,$_REQUEST);
        if($response == false){
            $url['_user'] = "signup-failed";
        }else{
            $json = [
                "username"=>$response['email'],
                "password"=>$response['password']
            ];
            $_SESSION['uID'] = $response['userID'];
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
        }else{
            $url['client'] = "profile";
            $url['err'] = 2014;
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

    case"quick-sms";
        
        $to_mobile= $_REQUEST['to-mobile'];
        $msg = $_REQUEST['message'];

        if(!isset($_REQUEST['sender-id'])){
            $sender ="test";
        }else{
            $sender = $_REQUEST['sender-id'];
        }
         
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
            $_LOG[] = "insfu funds to send sms";
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
                echo"send sms";
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
        $log = UserAccount::AddEventLog($_CONN,$_LOG);
    break;

    case"bulk-sms";
        $_ID = $_REQUEST['to-group'];
        $msg = $_REQUEST['message'];
        $sender = $_REQUEST['sender-id'];
        $mobile = Contact::View($_CONN,$_REQUEST['to-group']);
        $total = count($mobile);
        //sms gatewaye
        $legder = Transaction::balance($_CONN,$_SESSION['uID']);
        if($legder['bal'] < 1){
            $url['client'] = "dashboard";
            $url['err'] = 2003;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "insfu funds to send sms";
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
                echo"send sms";
                $_SMS[] = $_SESSION['uID'];
                $_SMS[] = format_mobile_num($mobile);
                $_SMS[] = $msg;
                $smslog = Message::Log($_CONN,$_SMS);
                
                $_LOG[] = $_SESSION['uID'];
                $_LOG[] = "Send SMS unsccessful";
                $_LOG[] = "success"; 
                
                $url['client'] = "dashboard";
                $url['err'] = 2005;
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
                    $result = Contact::addList($_CONN,$response,$getData);
                        
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
        $total_chr = strlen($_REQUEST['message']);

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
            $url['client']="schedule";
            $url['err']=2012;

            $_LOG[] = $_SESSION['uID'];
            $_LOG[] = "Schedule $ref Created";
            $_LOG[] = "success"; 
            $log = UserAccount::AddEventLog($_CONN,$_LOG);
        }
    break;
}

header("location: ?".http_build_query($url));
?>
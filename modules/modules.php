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

                $R[] = $_SESSION['uID'];
                $R[] = "User Logged In";
                $R[] = "info";
                $log = UserAccount::AddEventLog($_CONN,$R);
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

            $R[] = $_SESSION['uID'];
            $R[] = "User Sign Up";
            $R[] = "info";
            $log = UserAccount::AddEventLog($_CONN,$R);

            $url['client'] = "dashboard";
            $url['token'] = md5($token); 
        }
    break;

    case"quick-sms";
        $mobile= $_REQUEST['to-mobile'];
        $msg = $_REQUEST['message'];
        $sender = $_REQUEST['sender-id'];
        $arr = array($mobile);
 
        if (preg_match('/,/', $mobile)) {
            // string contains characters other than |
            $m = explode(",",$mobile);
            $total = count($m);
        }elseif(preg_match('/;/', $mobile)){
            $m = explode(",",$mobile);
            $total = count($m);
        }else{
            $m = $_REQUEST['to-mobile'];
            $total = 1;
        }
        //sms gatewaye
        if($sms === false){
            $R[] = $_SESSION['uID'];
            $R[] = "Send SMS unsccessfull";
            $R[] = "danger";
        }else{
            $R[] = $_SESSION['uID'];
            $R[] = "Send $total SMS sccessfull";
            $R[] = "success";
        }
    
        $log = UserAccount::AddEventLog($_CONN,$R);
    break;

    case"bulk-sms";
        $_ID = $_REQUEST['to-group'];
        $msg = $_REQUEST['message'];
        $sender = $_REQUEST['sender-id'];
        $data = Contact::View($_CONN,$_ID);
        $total = count($data);
        $n ="";
        foreach($data as $i){
            $n.=$i['mobile'].",";
        }
        //sms gatewaye
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
                    $url['err'] = 4004;
                    
                    $R[] = $_SESSION['uID'];
                    $R[] = "Upload Contact file failed";
                    $R[] = "warning";
                }else{
                    $url['client'] = "contact";
                    $url['contact'] = $response;
                    $url['err'] = 2000;

                    $R[] = $_SESSION['uID'];
                    $R[] = "Upload Contact fill successful";
                    $R[] = "success";
                }
            }else{
                $url['client'] = "contact";
                $url['contact'] = $_SESSION['gID'];
                $url['err'] = 5000;
                //echo "Please select valid file";

                $R[] = $_SESSION['uID'];
                $R[] = "Upload was unsccessful, invalid file";
                $R[] = "danger";
            }

            $log = UserAccount::AddEventLog($_CONN,$R);
        }
    break;
}

header("location: ?".http_build_query($url));
?>
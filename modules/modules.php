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
            $url['client'] = "dashboard";
            $url['token'] = md5($token); 
        }
    break;
}

header("location: ?".http_build_query($url));
?>
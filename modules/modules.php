<?php

switch($_REQUEST['submit']){

    case'login';
        $admin = config("admin");
        if(($_REQUEST['email'] != $admin->username) ||($_REQUEST['password'] != $admin->password)){
            $url['_user'] = "user-zero";
        }else{
            $json = [
                "username"=>$_REQUEST['email'],
                "password"=>$_REQUEST['password']
            ];
            $token = md5(json_encode($json));
            $token = password_hash($token,PASSWORD_DEFAULT);
            setcookie("token",$token);
            $url['_cp'] = "dashboard";
            $url['token'] = md5($token);
        }
    break;

    case'signup';
        if(false == UserAccount::register($_CONN,$_REQUEST)){
            $url['_user'] = "signup-failed";
          }else{
            $json = [
                "username"=>$_REQUEST['email'],
                "password"=>$_REQUEST['password']
            ];
            $token = md5(json_encode($json));
            $token = password_hash($token,PASSWORD_DEFAULT);
            setcookie("token",$token);
            $url['main'] = "dashboard";
            $url['token'] = md5($token);
          }
    break;

}

header("location: ?".http_build_query($url));
?>
<?php

class UserAccount{

    public static function login($conn,$r){

    }

    public static function register($conn,$r){

        $sql ="INSERT INTO `user_account`(`username`, `passwd`, `email`,`api_key`) VALUES (:user,:pwd,:email,:ukey)";
        $stmt = $conn->prepare($sql);
        return  $stmt->execute([
            ':user'=>$r['username'],
            ':pwd'=>$r['password'],
            ':email'=>$r['email'],
            ':ukey'=> md5(password_hash($r['email']."$".$r['passwoord']))
        ]);

    }

    public static function profile($conn,$r){

    }


}
?>
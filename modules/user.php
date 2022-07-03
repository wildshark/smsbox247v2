<?php

class UserAccount{

    public static function login($conn,$login){

        $sql = "SELECT user_account.* FROM user_account WHERE user_account.username = ? AND user_account.passwd = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute($login);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function register($conn,$r){

        $sql ="INSERT INTO `user_account`(`username`, `passwd`, `email`, `api_key`) VALUES (:user, :pwd, :email, :ukey)";
        $stmt = $conn->prepare($sql);
        return  $stmt->execute([
            ':user'=>$r['username'],
            ':pwd'=>$r['password'],
            ':email'=>$r['email'],
            ':ukey'=> md5($r['email']."$".$r['password'])
        ]);
    }

    public static function profile($conn,$r){

        if($r === "*.all"){
            $sql = "SELECT * FROM `user_account` ORDER BY `userID` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql = "SELECT * FROM `user_account` WHERE `userID`= :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ":id"=>$r
            ]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }   

}
?>
<?php

class UserAccount{

    public static function AddEventLog($conn,$request){

        $sql ="INSERT INTO `event`(`userID`, `details`,`badge_color`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function EventLogs($conn,$request){

        $sql = "SELECT `event`.* FROM `event` WHERE `event`.userID =:id LIMIT 0, 10";
        $stmt = $conn->prepare($sql);
        $stmt->execute([":id"=>$request]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    public static function login($conn,$login){

        $sql = "SELECT user_account.* FROM user_account WHERE user_account.username = :user AND user_account.passwd = :pwd";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":user"=>$login['username'],
            ":pwd"=>$login['password']
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($data === false){
            $sql = "SELECT user_account.* FROM user_account WHERE user_account.email = :user AND user_account.passwd = :pwd";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ":user"=>$login['username'],
                ":pwd"=>$login['password']
            ]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    public static function register($conn,$r){

        $sql ="INSERT INTO `user_account`(`account`,`username`, `passwd`, `email`, `api_key`) VALUES (:account, :user, :pwd, :email, :ukey)";
        $stmt = $conn->prepare($sql);
        $data = $stmt->execute([
            ':account' => time(),
            ':user' => $r['username'],
            ':pwd' => $r['password'],
            ':email' => $r['email'],
            ':ukey' => md5($r['email']."$".$r['password'])
        ]);

        if($data == false){
            $data = false;
        }else{
            $sql = "SELECT * FROM `user_account` WHERE `userID`=:id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':id' =>$conn->lastInsertId()
            ]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
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
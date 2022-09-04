<?php

class UserAccount{

    public static function total($conn){

        $sql ="SELECT count(user_account.userID) as total FROM user_account";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($data == false){
            $total = 0;
        }else{
            $total = $data['total'];
        }

        return $total;
    }

    public static function AddEventLog($conn,$request){

        $request[] = date("Y-m-d H:i:s");
        $sql ="INSERT INTO `event`(`userID`, `details`,`badge_color`,`cDate`) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function EventLogs($conn,$request){

        $sql = "SELECT `event`.* FROM `event` WHERE `event`.userID =:id  ORDER BY `eventID` DESC LIMIT 0, 10";
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

    public static function AddProfile($conn,$request){
        
        $sql ="INSERT INTO `user_account`(`account`,`username`, `passwd`, `email`,`mobile`, `api_key`,`role`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function VerifyProfile($conn,$action,$verify){

        if($action === "email"){
            $sql = "SELECT user_account.* FROM user_account WHERE user_account.email LIKE :id";
        }elseif($action === "mobile"){
            $sql = "SELECT user_account.* FROM user_account WHERE user_account.mobile LIKE :id";
        }elseif($action === "account"){
            $sql = "SELECT user_account.* FROM user_account WHERE user_account.account LIKE :id";
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":id"=>"%$verify%"
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if(false == $data){
            return FALSE;
        }else{
            $_SESSION['verifyID'] = $data['userID'];
            return TRUE;
        }
    }

    public static function SearchProfile($conn,$string){

        $sql = "SELECT user_account.* FROM user_account WHERE user_account.username LIKE :string OR user_account.mobile LIKE :string OR user_account.email LIKE :string";
        $stmt = $conn->prepare($sql);
        $stmt->execute([":string"=>"%$string%"]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function profile($conn,$id){

        if($id === "*.all"){
            $sql = "SELECT * FROM `user_account` ORDER BY `userID` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($id === "client"){
            $sql = "SELECT user_account.* FROM user_account WHERE user_account.role LIKE '%client%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }elseif($id ==="admin"){
            $sql = "SELECT user_account.* FROM user_account WHERE user_account.role LIKE '%admin%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql = "SELECT * FROM `user_account` WHERE `userID`= :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":id"=>$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }
    
    public static function UpdateProfile($conn,$request){

        $sql = "UPDATE `user_account` SET `full_name` = ?, `mobile` = ?, `address` = ?, `company` = ?, `country` = ?, `city` = ?, `zip` = ? WHERE `userID` = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }
    
    public static function ChangePassword($conn,$request){

        $sql ="UPDATE `user_account` SET `passwd` = ? WHERE `userID` = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function RemoveProfile($conn,$request){

        $sql="UPDATE `user_account` SET `statusID` = 3 WHERE `userID` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function BlockProfile($conn,$request){

        $sql="UPDATE `user_account` SET `statusID` = 2 WHERE `userID` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

}
?>
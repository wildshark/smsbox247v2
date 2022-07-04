<?php

class Message{

    public static function Log($conn,$request){

        $sql = "INSERT INTO `sms_log`(`userID`, `sms_to`, `sms_msg`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        return  $stmt->execute($request);

    }

    public static function ViewLog($conn,$request){;

        $sql ="SELECT sms_log.* FROM sms_log WHERE sms_log.userID =:id ORDER BY sms_log.smsID DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id'=>$request]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>
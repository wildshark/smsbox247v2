<?php

class Message{

    public static function sms($conn,$sms){

        $sql = "INSERT INTO `message`(`userID`, `sms_to`, `sms_msg`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        return  $stmt->execute();

    }
}


?>
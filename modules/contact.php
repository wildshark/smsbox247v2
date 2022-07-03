<?php

class Contact{

    public static function add($conn,$request){

        $sql ="INSERT INTO `contact_main`(`userID`, `file_name`, `content`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    } 

    public static function update($conn,$request){

        $sql = "UPDATE `contact_main` SET `file_name` = ?, `content` = ? WHERE `addressID` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static  function delete($conn,$request){

        $sql = "UPDATE `contact_main` SET `statusID` =? WHERE `addressID` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function view($conn,$request){

        if($request ===  "*.all"){
            $sql ="SELECT * FROM `contact_main` ORDER BY `addressID` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql ="SELECT * FROM `contact_main` WHERE `addressID`=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute($request);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }
}


?>
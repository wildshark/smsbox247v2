<?php

class Contact{

    public static function addFileName($conn,$request){

        $sql ="INSERT INTO `contact_main`(`userID`, `file_name`) VALUES (?,?)";
        $stmt = $conn->prepare($sql);
        $data = $stmt->execute($request);
        if($data == false){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    } 

    public static function update($conn,$request){

        $sql = "UPDATE `contact_main` SET `file_name` = ?, `content` = ? WHERE `addressID` =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function delete($conn,$request){

        $sql = "UPDATE `contact_main` SET `statusID` = 2 WHERE `addressID` =:id";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([':id'=>$request]);
    }

    public static function addList($conn,$id,$r,$uID){

        if(!isset($r[0])){
            return false;
        }else{
            $mobile = $r[0];
        }
        
        if(!isset($r[1])){
            $name = "NULL";
        }else{
            $name = $r[1];
        }

        if(!isset($r[2])){
            $network = "NULL";
        }else{
            $network = $r[2];
        }
        
        $sql = "INSERT INTO `contact_details`(`userID`,`addressID`, `mobile`, `cname`, `network`) VALUES (:uuID,:id,:mobile,:cname,:network)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([
            ":uuID"=>$uID,
            ":id"=>$id,
            ":mobile"=>$mobile,
            ":cname"=>$name,
            ":network"=>$network
        ]);
    }

    public static function updateList($conn,$action,$request){

        if($action === "update"){
            $sql ="UPDATE `contact_details` SET `mobile` =?, `cname` =?, `network` =? WHERE `contactID` =?";
            $stmt = $conn->prepare($sql);
            $data = $stmt->execute($request);
        }elseif($action === "delete"){
            $sql ="UPDATE `contact_details` SET `statusID` = 2 WHERE `contactID` =?";
            $stmt = $conn->prepare($sql);
            $data = $stmt->execute($request);
        }
        
        return $data;
    } 

    public static function List($conn,$request){

        if($request ===  "*.all"){
            $sql ="SELECT * FROM `contact_main` WHERE `statusID`=1 ORDER BY `addressID` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql ="SELECT * FROM `contact_main` WHERE `userID`=:id AND `statusID`=1";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":id"=>$request]);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    public static function View($conn,$request){

        $sql ="SELECT contact_details.* FROM contact_details WHERE contact_details.addressID = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([":id"=>$request]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}


?>
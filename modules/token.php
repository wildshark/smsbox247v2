<?php

class tokenz{

    public static function add($conn,$request){

        $sql = "INSERT INTO `api_tokens` (`userID`, `date_created`, `api_token`, `website`, `status`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function update($conn,$request){
        $sql = "UPDATE `api_tokens` SET `api_token` = ? WHERE apiID = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function change_status($conn,$request){

        $sql ="UPDATE `api_tokens` SET `status` = ? WHERE apiID =?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function delete($conn,$request){

        $sql ="DELETE FROM `api_tokens` WHERE apiID =:id";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([':id'=>$request]);
    }

    public static function getList($conn,$request = null){

        if(is_null($request)){
            $sql = "SELECT api_tokens.* FROM api_tokens ORDER BY api_tokens.apiID DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }else{
            $sql = "SELECT api_tokens.* FROM api_tokens WHERE api_tokens.userID =:id ORDER BY api_tokens.apiID DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":id"=>$request]);
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
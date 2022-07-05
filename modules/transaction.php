<?php

class Transaction{

    public static function general_ledger($conn,$id){

        $sql = "SELECT * FROM `ledger` WHERE `userID`=:id ORDER BY `creditID` DESC LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id'=>$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function ledger($conn,$id){

        if($id === "*.all"){
            $sql = "SELECT * FROM `ledger` LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql ="SELECT ledger.* FROM ledger WHERE ledger.paid > 0 AND ledger.userID =:id ORDER BY ledger.creditID DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id'=>$id]);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $data;
    }

    public static function debit($conn,$request){

        $sql ="INSERT INTO `ledger`(`userID`, `ref`, `details`, `paid`) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }

    public static function credit($conn,$request){

        $sql = "INSERT INTO `sms247box`.`ledger`(`userID`, `ref`, `details`, `spend`) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }
    
    public static function balance($conn,$request){

        if($request == "*.all"){
           $sql ="SELECT ledger.userID, sum(ledger.paid) AS paid, sum(ledger.spend) AS spend, sum(ledger.paid - ledger.spend) AS bal, user_account.full_name, user_account.username, user_account.account FROM ledger INNER JOIN user_account ON ledger.userID = user_account.userID";
           $stmt = $conn->prepare($sql);
           $stmt->execute();
           $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
           if($data == false){
                $data = [
                    "paid"=>0,
                    "spend"=>0,
                    "bal"=>0
                ];
           }
        }elseif($request == "global-balance"){
            $sql ="SELECT sum(ledger.paid) as paid, sum(ledger.spend) as spend, sum(ledger.paid - ledger.spend) as bal FROM ledger";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if($data == false){
                 $data = [
                     "paid"=>0,
                     "spend"=>0,
                     "bal"=>0
                 ];
            }
        }else{
            $sql = "SELECT ledger.userID, sum(ledger.paid) AS paid, sum(ledger.spend) AS spend, sum(ledger.paid - ledger.spend) AS bal FROM ledger INNER JOIN user_account ON ledger.userID = user_account.userID WHERE ledger.userID =:id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([":id"=>$request]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if($data == false){
                $data = [
                    "paid"=>0,
                    "spend"=>0,
                    "bal"=>0
                ];
           }
        }
        return $data;
    }
}
?>
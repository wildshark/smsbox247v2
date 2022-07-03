<?php

class Transaction{

    public static function ledger($conn,$r){

        $sql = "SELECT * FROM `ledger` LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function debit($conn,$request){

        $sql ="INSERT INTO `ledger`(`userID`, `ref`, `paid`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }

    public static function credit($conn,$request){

        $sql = "INSERT INTO `ledger`(`userID`, `ref`, `spend`) VALUES (?,?,?)"
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }
    
    public static function balance($conn,$request){

        if($request == "*.all"){
           $sql ="SELECT ledger.userID, sum(ledger.paid) AS paid, sum(ledger.spend) AS spend, sum(ledger.paid - ledger.spend) AS bal, user_account.full_name, user_account.username FROM ledger INNER JOIN user_account ON ledger.userID = user_account.userID";
           $stmt = $conn->prepare($sql);
           $stmt->execute($request);
           $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql = "SELECT ledger.userID, sum(ledger.paid) AS paid, sum(ledger.spend) AS spend, sum(ledger.paid - ledger.spend) AS bal FROM ledger INNER JOIN user_account ON ledger.userID = user_account.userID WHERE ledger.userID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute($request);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }

}
?>
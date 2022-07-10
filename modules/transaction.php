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

        $sql = "INSERT INTO `ledger`(`userID`, `ref`, `details`, `spend`) VALUES (?,?,?,?)";
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

    public static function totalOrder($conn){

        $sql = "SELECT count(orders.orderID) as total FROM orders WHERE orders.statusID = 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($data == false){
            $data = 0;
        }else{
            $data = $data['total'];
        }

        return $data;

    }
    
    public static function AddOrders($conn,$request){

        $sql="INSERT INTO `orders`(`userID`, `ref`, `currency`, `amount`, `wallet`) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        if(false == $stmt->execute($request)){
            return false;
        }else{
            return $conn->lastInsertId();
        }
    }

    public static function ListOrders($conn,$action,$id){

        if((!isset($id))||($id == false)){
            if($action === "approved"){
                $sql = "SELECT orders.*, user_account.account, user_account.full_name, user_account.username, user_account.mobile, user_account.email FROM orders INNER JOIN user_account ON orders.userID = user_account.userID WHERE orders.statusID = 2";
            }elseif($action === "pending"){
                $sql = "SELECT orders.*, user_account.account, user_account.full_name, user_account.username, user_account.mobile, user_account.email FROM orders INNER JOIN user_account ON orders.userID = user_account.userID WHERE orders.statusID = 1";
            }elseif($action ==="delete"){
                $sql = "SELECT orders.*, user_account.account, user_account.full_name, user_account.username, user_account.mobile, user_account.email FROM orders INNER JOIN user_account ON orders.userID = user_account.userID WHERE orders.statusID = 3";
            }
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        }else{
            $sql = "SELECT orders.*, user_account.account, user_account.full_name, user_account.username, user_account.mobile, user_account.email FROM orders INNER JOIN user_account ON orders.userID = user_account.userID WHERE orders.userID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute($i[]=$id);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public static function ViewOrder($conn,$id){

        $sql ="SELECT orders.*, user_account.account, user_account.full_name, user_account.username, user_account.mobile, user_account.email FROM orders INNER JOIN user_account ON orders.userID = user_account.userID WHERE orders.orderID =:id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([":id"=>$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function ApproveOrders($conn,$id){

        $sql ="UPDATE `orders` SET `statusID` =2 WHERE `orderID` =:id";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([":id"=>$id]);
    }

    public static function PendingOrders(){

    }

    public static function DelOrder(){

    }
}
?>
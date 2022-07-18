<?php

class Message{

    public static function Log($conn,$request){

        $request[] = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `sms_log`(`userID`, `sms_to`, `sms_msg`,`create_date`) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        return  $stmt->execute($request);
    }

    public static function ViewLog($conn,$request){;

        $sql ="SELECT sms_log.* FROM sms_log WHERE sms_log.userID =:id ORDER BY sms_log.smsID DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id'=>$request]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function AddSchedule($conn,$request){

        $sql = "INSERT INTO `sms_schedule`(`created_date`,`userID`,`schedule_ref`, `schedule_date`, `schedule_time`, `sms_mobile`, `sms_msg`, `sender`,`total_number`,`total_sms`) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function ListSchedule($conn,$request){

        if($request == "*.all"){
            $sql = "SELECT * FROM `sms_schedule` ORDER BY `scheduleID` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $sql = "SELECT * FROM `sms_schedule` WHERE `userID`=:id ORDER BY `scheduleID` DESC LIMIT 0,1000";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id'=>$request]);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public static function schedulemsg($r){

        $sms = array(
            "username"=>'',
            "password"=>'',
            "message"=>'',
            "type"=>'',
            "dlr"=>'',
            "source"=>'',
            "destination"=>'',
            "date"=>'', //MM/DD/YYYY
            "time"=>'' //hh:mm am/pm
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rmlconnect.net/bulksms/schedulesms?".http_build_query($sms),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }
}


?>
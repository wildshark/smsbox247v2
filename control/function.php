<?php

function currencies($list){

}

function wallet($wallets){
    $out ="";
    foreach($list as $wallets){
        $r = explode("-",$wallets);
        $out .= "<option value='$r[0]'>$r[1]<option>";
    } 
    return $out; 
} 

function goBack(){

    if(!isset($_SESSION['portal'])){
        return "";
    }else{
        return "?".$_SESSION['portal']."=dashboard";
    }
}

function time_elapsed($datetime, $full = false) {

    $now = time();
    $ago = strtotime($datetime);
    
    $diff   = $now - $ago; 
    
    $string = array(
        'year'  => 31104000,
        'month' => 2592000,
        'week'  => 604800,
        'day'   => 86400,
        'hour'  => 3600,
        'minute'=> 60,
        'second'=>  1
    );
    
    $data = array();
    
    foreach ($string as $k => $v) {
    
        if($diff > $v){
            $count    = round($diff / $v);
            $data[$k] = $count . (($count > 1) ? ' ' . $k .'s' : ' ' . $k);
            $diff     = $diff % $v;
        }
    }
    
    if (!$full) $data = array_slice($data, 0, 1);
       return $data ? implode(', ', $data) . ' ago' : 'just now';
}
//echo time_elapsed('2016-01-18 13:07:30', true); 
    // 2 years, 1 month, 2 weeks, 6 days, 25 seconds ago
// echo time_elapsed('2016-01-18 13:07:30'); 
    // 2 years ago
    
function cmbGroupContact($list){

    $data = "";
    foreach($list as $r){
        $id = $r['addressID'];
        $string = $r['file_name'];
        $data.= "<option value='$id'>$string</option>";
    }

    return $data;

}

function format_mobile_num($list){

    $n ="";
    foreach($list as $i){
        $n.=$i['mobile'].",";
    }
    return $n;
}

function profile($list){

    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }

        if(!isset($r['full_name'])){
            $r['full_name'] ="Null";
        }

        if(!isset($r['username'])){
            $r['username'] ="Null";
        }

        if(!isset($r['mobile'])){
            $r['mobile'] ="Null";
        }

        if(!isset($r['email'])){
            $r['email'] ="Null";
        }
        if(!isset($r['userID'])){
            $view = "javascript:void(0);";
            $delete = "javascript:void(0);";
        }else{
            $view = "?cp=profile&ui=update&id=".$r['userID'];
            $delete = "?cp=profile&ui=delete&id=".$r['userID'];
        }
        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$r['full_name']}</td>
            <td>{$r['username']}</td>
            <td>{$r['mobile']}</td>
            <td>{$r['email']}</td>
            <td>
                <div class='d-flex'>
                    <a href='$view' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                    <a href='$delete' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
                </div>												
            </td>												
        </tr>";
    }

    return $data;
}

function MainLedgerSheet($list){

    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }

        if(!isset($r['username'])){
            $r['username'] ="Null";
        }
        //$url['pp'] = $r;
        //$d = http_build_query($url);
        $d = $r['userID'];
        $paid = number_format($r['paid'],2);
        $spend = number_format($r['spend'],2);
        $balance = number_format($r['bal'],2);
        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$r['username']}</td>
            <td>{$paid}</td>
            <td>{$spend}</td>
            <td>{$balance}</td>
            <td>
                <div class='d-flex'>
                    <a href='?cp=ledger-details&u=$d' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                    <!--a href='javascript:void(0);' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a-->
                </div>												
            </td>												
        </tr>";
    }

    return $data;
}

function DetailsLedgerSheet($list){

    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }

        $date = date("d-m-Y",strtotime($r['tranDate']));
        $ref = $r['ref'];
        $details = $r['details'];
        $paid = number_format($r['paid'],2);
        $spend = number_format($r['spend'],2);
        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$date}</td>
            <td>{$ref}</td>
            <td>{$details}</td>
            <td>{$paid}</td>
            <td>{$spend}</td>
            <td>
                <div class='d-flex'>
                    <a href='javascript:void(0);' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
                </div>												
            </td>												
        </tr>";
    }

    return $data;
}

function ContactFileSheet($list){

    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }

        $file = $r['file_name'];
        $date = time_elapsed($r['create_date']);
        $id = $r['addressID'];
     
        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$file}</td>
            <td>{$date}</td>
            <td>
                <div class='d-flex'>
                    <a href='?client=contact&contact=$id' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                    <a href='?client=delete&ui=group&id=$id' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
                </div>												
            </td>												
        </tr>";
    }

    return $data;

}

function DeskboardOrdersList($list){
    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }
        $q = "X".uniqid();
        $id = $r['orderID'];
        $date = $r['tranDate'];
        $ref = $r['ref'];
        $fname = $r['full_name'];
        $mobile = $r['mobile'];
        $email = $r['email'];
        $account = $r['account'];
        $username = strtoupper($r['username']);
        $time = time_elapsed($r['tranDate']);
        $amount = number_format($r['amount'],2);

        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$time}</td>
            <td>{$r['ref']}</td>
            <td>{$r['account']}</td>
            <td class='text-primary'>{$username}</td>
            <td>{$amount}</td>
            <td>
                <div class='d-flex'>
                    <a href='javascript:void(0);' data-bs-toggle='modal' data-bs-target='#$q' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                    <a href='?cp=orsers&action=remove&id=$id' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
                </div>												
            </td>												
        </tr>
        <div class='modal fade' id='$q'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Order Details #$ref</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                                </div>
                                <div class='modal-body'>
                                    <div class='row'>
                                        <div class='col-md-7'>Date: $date</div>
                                        <div class='col-md-4'>Invoice: $ref</div>
                                    </div>
                                    <br/>
                                    <div class='row'>
                                        <div class='col-md-12ms-auto'>Name: $fname</div>
                                        <div class='col-md-12 ms-auto'>Email: $email</div>
                                        <div class='col-md-12 ms-auto'>Mobile: $mobile</div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-7'></div>
                                        <div class='col-md-4'><b>Paid: $amount</b></div>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <a href='?cp=orders&action=aprove&id=$id' class='btn btn-primary'>Aprove</a>
                                    <a href='?cp=orsers&action=remove&id=$id' class='btn btn-danger'>Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
        ";
    }

    return $data;
}

function AdminOrdersList($list){
    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }
        $q = "X".uniqid();
        $id = $r['orderID'];
        $date = $r['tranDate'];
        $ref = $r['ref'];
        $fname = $r['full_name'];
        $mobile = $r['mobile'];
        $email = $r['email'];
        $account = $r['account'];
        $username = $r['username'];
        $amount = number_format($r['amount'],2);

        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$r['tranDate']}</td>
            <td>{$r['ref']}</td>
            <td>{$r['account']}</td>
            <td>{$r['username']}</td>
            <td>{$r['amount']}</td>
            <td>
                <div class='d-flex'>
                    <a href='javascript:void(0);' data-bs-toggle='modal' data-bs-target='#$q' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                </div>												
            </td>												
        </tr>
        <div class='modal fade' id='$q'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Order Details #$ref</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                                </div>
                                <div class='modal-body'>
                                    <div class='row'>
                                        <div class='col-md-7'>Date: $date</div>
                                        <div class='col-md-4'>Invoice: $ref</div>
                                    </div>
                                    <br/>
                                    <div class='row'>
                                        <div class='col-md-12ms-auto'>Name: $fname</div>
                                        <div class='col-md-12 ms-auto'>Email: $email</div>
                                        <div class='col-md-12 ms-auto'>Mobile: $mobile</div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-7'></div>
                                        <div class='col-md-4'><b>Paid: $amount</b></div>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <a href='?cp=orders&action=aprove&id=$id' class='btn btn-primary'>Aprove</a>
                                    <a href='?cp=orsers&action=remove&id=$id' class='btn btn-danger'>Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
        ";
    }

    return $data;
}

function AdminOrdersApproved($list){
    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }
        $q = "X".uniqid();
        $id = $r['orderID'];
        $date = $r['tranDate'];
        $ref = $r['ref'];
        $fname = $r['full_name'];
        $mobile = $r['mobile'];
        $email = $r['email'];
        $account = $r['account'];
        $username = $r['username'];
        $amount = number_format($r['amount'],2);

        $data.="
            <tr>
                <td>{$n}</td>
                <td>{$r['tranDate']}</td>
                <td>{$r['ref']}</td>
                <td>{$r['account']}</td>
                <td>{$r['username']}</td>
                <td>{$r['amount']}</td>							
            </tr>
        ";
    }

    return $data;
}

function BulkContact($list){
    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }

        if(!isset($r['mobile'])){
            $r['mobile'] ="Null";
        }

        if(!isset($r['cname'])){
            $r['cname'] ="Null";
        }

        if(!isset($r['network'])){
            $r['network'] ="Null";
        }

        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$r['mobile']}</td>
            <td>{$r['cname']}</td>
            <td>{$r['network']}</td>
            <td>
                <div class='d-flex'>
                    <a href='javascript:void(0);' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                    <a href='javascript:void(0);' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
                </div>												
            </td>												
        </tr>";
    }

    return $data;
}

function ClientTransaction($list){

    $data ="";
    if($list == false){
        $data="";
    }else{
         foreach($list as $r){

            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }

            $date = $r['tranDate'];
            $ref = $r['ref'];
            $amount = number_format($r['paid'],2);
        
            $data.="
                <tr>
                    <td>{$n}</td>
                    <td>{$date}</td>
                    <td>{$ref}</td>
                    <td>{$amount}</td>
                    <td></td>
                </tr>";
        }
    }
   

    return $data;
}

function EventLog($list){
    
    $data="";
    if($list == false){
        $data ="";
    }else{
        foreach($list as $r){
        $date =time_elapsed($r['cDate']);
        $details = $r['details'];
        $css = $r['badge_color'];
        $data.="
            <li>
                <div class='timeline-badge $css'></div>
                <a class='timeline-panel text-muted' href='javascript:void(0);'>
                    <span>$date</span>
                    <h6 class='mb-0'>$details</h6>
                </a>
            </li>";
        }
    }
    return $data;

}

function ClientSMSLog($list){
    $data="";
    if($list == false){
        $data ="";
    }else{
       
        foreach($list as $r){
        $date =time_elapsed($r['create_date']);
        //$date = time_since($date);
        $sms = $r['sms_to'];
        $details = $r['sms_msg'];
        if($r['statusID'] == 1){
            $css = "badge-danger";
            $str = "Pending";
        }else{
            $css = "badge-success";
            $str = "Successful";
        }
        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }
        $data.="
            <div class='media mb-3 pb-3 border-bottom'>
                <div class='image-bx me-sm-4 me-2'>
                    <!--img src='images/profile/Untitled-1.jpg' alt='' class='rounded-circle img-1'>
                    <span class='active'></span-->
                </div>
                <div class='media-body d-sm-flex justify-content-between d-block align-items-center'>
                    <div class='me-sm-3 me-0'>
                        <h6 class='fs-16 font-w600 mb-sm-2 mb-0'><a href='messages.html'class='text-black'>$sms</a></h6>
                        <p class='text-black mb-1'>$details</p>
                        <span class='fs-14'>$date</span>
                    </div>
                </div>
            </div>";
        }
    }
    return $data;

}

function sms_schedule($list){
    $data ="";
    foreach($list as $r){

        if(!isset($n)){
            $n = 1;
        }else{
            $n = $n + 1;
        }
        
        $model="MDL".uniqid();
        
        $ref = $r['schedule_ref'];
        $date = time_elapsed($r['created_date']);
        $created = $r['created_date'];
        $scheDate = $r['schedule_date'];
        $scheTime = $r['schedule_time'];
        $id = $r['scheduleID'];
        $msg = $r['sms_msg'];
        $mobile = $r['sms_mobile'];

        $count_char = strlen($msg);

        $timeID =$r['schedule_date'];
        $timeID = strtotime($timeID);
        $clock = time();

        if($clock > $timeID){
            $status = "done";
        }else{
            $status = "waiting";
        }

       

        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$date}</td>
            <td>{$ref}</td>
            <td>{$scheDate}</td>
            <td>{$scheTime}</td>

            <td>
                <div class='d-flex'>
                    <a href='javascript:void(0)' data-bs-toggle='modal' data-bs-target='#$model' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
                    <a href='?client=delete&ui=group&id=$id' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
                </div>
                <div class='modal fade' id='$model'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title'>Schedule ID: $ref</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                            </div>
                            <div class='modal-body'>
                                <div class='row justify-content-between'>
                                    <h6>Last Modified $created</h6>
                                    <h6>Schedule Date $scheDate</h6>
                                    <h6>Schedule Time $scheTime</h6>

                                    <h6>Status $status</h6>

                                    <p class='text-justify'>Message: <br>$msg</p>
                                    <p class='text-justify'>Message To: <br>$mobile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>												
        </tr>";
    }

    return $data;
}
?>
<?php



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

        $data.="
        <tr>
            <td>{$n}</td>
            <td>{$r['full_name']}</td>
            <td>{$r['username']}</td>
            <td>{$r['mobile']}</td>
            <td>{$r['email']}</td>
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

function LedgerSheet($list){

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
                    <a href='javascript:void(0);' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
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
?>
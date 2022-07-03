<?php

function config($str){

    if(!file_exists("config.json")){
        echo "No config file";
        exit();
    }else{
        $j = json_decode(file_get_contents("config.json"));

        switch($str){

            case"admin";
                return $j->admin;
            break;

            case"api";
                return $j->setup->api;
            break;
        }

    }
}

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
        $date = $r['create_date'];
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

    return $data;
}


?>
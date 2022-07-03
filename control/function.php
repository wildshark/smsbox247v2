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

?>
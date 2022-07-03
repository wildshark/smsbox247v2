<?php
$_SESSION['token'] = $_REQUEST['token'];

switch($_REQUEST['_cp']){

    case"dashboard";
        require($_PAGE['dashboard']);
    break;

    case"user";
        $profile  = UserAccount::profile($_CONN,"*.all");
        $view = "admin/profile.php";
        require($_PAGE['table']);
    break;

    case"ledger";
        require($_PAGE['table']);
    break;

    case"payment";

    break;
}

?>
<?php

switch($_REQUEST['page']){

    case"login";
        require($_PAGE['login']);
    break;

    case"register";
        require($_PAGE['signup']);
    break;

    case"reset";
        require($_PAGE['reset']);
    break;

    case"activition";
        $uid = TokenKey();
        require($_PAGE['activition']);
    break;

}

?>
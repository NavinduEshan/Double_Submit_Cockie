<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 6/17/2019
 * Time: 11:53 AM
 */
require_once 'token.php';
$val = $_POST["token"];
if(isset($_POST['updatepost'])){
    if(token::checkToken($val,$_COOKIE['csrfTokenCookie'])) {
        echo "Server request accepted req: ".$_POST['updatepost'].", CSRF token matched (cookie == hidden field) ((".$val.")----(".$_COOKIE['csrfTokenCookie']."))";
    }else {
        echo "Server request fail! , Unauthorized req!".$_COOKIE['csrfTokenCookie'];
    }
}
?>
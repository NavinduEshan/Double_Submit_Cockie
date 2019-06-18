<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 6/17/2019
 * Time: 11:54 AM
 */
class token {

    public static function checkToken($token,$cookiecsrf){
        if($cookiecsrf == $token) {
            return true;
        }
    }
}
?>
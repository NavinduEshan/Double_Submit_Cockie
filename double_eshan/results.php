<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 6/17/2019
 * Time: 11:53 AM
 */

if(isset($_POST['username'],$_POST['password'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    if($uname == 'kavi' && $pwd == 'tharu'){
        echo '<h1>Successfully logged in</h1>';
        session_start();
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
        $session_id = session_id();
        setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
        setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');

    }else{
        echo '<h1>Invalid Credentials</h1>';
        exit();
    }
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Double Submit Cookie Pattern</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>

        $(document).ready(function(){

            var cookie_value = "";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            var csrf = decodedCookie.split(';')[2]
            // alert(decodedCookie)
            if(csrf.split('=')[0] = "csrfTokenCookie" ){
                // alert(csrf.split('csrfTokenCookie=')[1])
                cookie_value = csrf.split('csrfTokenCookie=')[1];
                document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;
            }
        });
    </script>
    <head>
<body>
<form class="form" action="home1.php" method="post">
    <div class="form-group">
        <label for="username" class="text-white"><h4>Write Something<h4></label><br>
        <input type="text" name="updatepost" >
    </div>
    <div id="div1">
        <input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
    </div>
    <div class="form-group">
        <input type="submit"  value="updatepost">
    </div>
</form>

</body>
</html>
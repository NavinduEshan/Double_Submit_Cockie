<?php
/**
 * Created by PhpStorm.
 * User: Eshan
 * Date: 6/17/2019
 * Time: 11:53 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Double Submit Cookie</title>
</head>
<body style="background: black">
<form class="form" action="results.php" method="post">
    <div>
        <label for="username" class="text-white">Username:</label><br>
        <input type="text" name="username" id="username" >
    </div>
    <div>
        <label for="password" class="text-white">Password:</label><br>
        <input type="password" name="password" id="password" >
    </div>
    <div>
        <input type="submit" name="Login" value="Login">
    </div>
</form>
</body>
</html>
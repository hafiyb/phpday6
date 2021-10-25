<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include "header.php";
    ?>
</head>
<body>
<h3>Login</h3>
<form action="loginvalidation.php" method='post'>
Phone Num : +60<input type="text" name="phoneNum">
Password : <input type="text" name="password">
<input type="submit">
</form>

<br>
<br>
<a href="registration.php">New user?</a>
</body>
</html>
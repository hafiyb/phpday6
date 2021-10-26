<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
include 'header.php';
include '../model/SQLuser.php';
?>
</head>
<body>
<?php

$phone = $_POST['phoneNum'];

// $sql = "SELECT * FROM user WHERE user_phone='$phone'";

// $result = $conn->query($sql);

// $row = $result->fetch_assoc();



// $actPassword = $row['user_password'];
$actPassword = select_user('user_phone', $phone)['user_password'];
echo select_user('user_phone', $phone)['user_name'];
echo $phone;

$password = $_POST['password'];
echo $password;
echo $actPassword;

if(password_verify($password,$actPassword)){

    echo "Login succesful!";
    echo "<form method='post' action='../view/scanner.php'>";
    // $sql = "SELECT user_id FROM user WHERE user_phone='$phone'";
    // $result = $conn->query($sql);
    // $row = $result->fetch_assoc();
    // $count = $row['user_id'];
    $count = select_user('user_phone', $phone)['user_id'];
    echo "<input type='hidden' name='count' value='$count'>";
    echo "<input type='hidden' name='status' value='1'>";
    echo "<input type='submit'> ";
    echo "</form>";

} else {
    echo "Login failed";
    echo "<br><br><a href='../view/login.php'>Return</a>";
}

?>
</body>
</html>
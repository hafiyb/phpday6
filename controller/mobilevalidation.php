<?php
    include 'header.php';
    include '../model/SQLuser.php';

    // echo $_POST['phone'];
    $count = $_POST['count'];
    // echo $count;
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    update_user_password($password, $phone, $count);

    $randnum = rand(100000,999999);

    echo $randnum;
    
    update_user_tac($randnum, $count);

    header("Location: ../view/tacno.php");

?>
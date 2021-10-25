<?php

function select_user_name($count){
    include 'header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user WHERE user_id='$count'";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row['user_name'];
}


function select_user_phone($count){
    include 'header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user WHERE user_id='$count'";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo $row['user_phone'];
}

function select_user_password($count){
    include 'header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user WHERE user_phone='$count'";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row['user_password'];
}


?>
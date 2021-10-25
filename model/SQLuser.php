<?php

// include 'header.php';



function select_user_name($count){

    $conn = mysqli_connect('localhost','debian-sys-maint','wAx970ocL4dxk5T4','mysj');

    echo "this is a function test";

    $sql = "SELECT * FROM user WHERE user_id='$count'";

    echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo $row['user_name'];
}



?>
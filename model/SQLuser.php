<?php


function select_user_name($count){

    echo "this is a function test";

    $sql = "SELECT * FROM user WHERE user_id='$count'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo $row['user_name'];
}



?>
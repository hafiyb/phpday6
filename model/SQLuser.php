<?php

include 'header.php';

function select_user_name($count){

    echo "this is a function test";

    $sql = "SELECT * FROM user WHERE user_id='$count'";

    echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "data retrieved successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    print_r ($row);

    echo $row['user_name'];
}



?>
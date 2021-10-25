<?php

function select_user($id, $count){
    include 'header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user WHERE $id='$count'";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row;
}

function select_all_user(){
    include 'header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row;
}

function insert_user($target, $value){
    include 'header.php';

    // echo "this is a function test";

    $sql = "INSERT INTO user($target) VALUES ('$value')";

    echo $sql;

    // echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
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

function user_count(){
    include 'header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row->num_rows;
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

function update_user_password($password, $phone, $count){
    include 'header.php';

    $hash = password_hash($password,PASSWORD_BCRYPT);   

    $sql = "UPDATE user SET user_phone='$phone', user_password='$hash' WHERE user_id='$count'";

    echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

function update_user_tac($tac, $count){

    include 'header.php';

    $sql = "UPDATE user SET user_tac='$tac' WHERE user_id='$count'";

    echo $sql;


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    
?>
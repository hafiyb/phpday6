<?php

function select_user($id, $count){
    include '../controller/header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user WHERE $id='$count'";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row;
}

function user_count(){
    include '../controller/header.php';

    // echo "this is a function test";

    $sql = "SELECT * FROM user";

    // echo $sql;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $result->num_rows;
}

function insert_user($target, $value){
    include '../controller/header.php';

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
    include '../controller/header.php';

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

    include '../controller/header.php';

    $sql = "UPDATE user SET user_tac='$tac' WHERE user_id='$count'";

    echo $sql;


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function update_user_name($name, $count){

    include '../controller/header.php';

    $newName = $name;

    $sql = "UPDATE user SET user_name='$newName' WHERE user_id='$count'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Successfully updated name!');</script>";
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    
?>
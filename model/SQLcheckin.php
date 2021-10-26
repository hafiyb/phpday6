<?php
session_start();

function insert_checkin($company_id, $count){

    include '../controller/header.php';

    $sql = "INSERT INTO check_in(company_id, user_id) VALUES ('$company_id','$count') ";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Successfully checked in!');</script>";
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
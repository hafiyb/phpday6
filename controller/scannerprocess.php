<?php
session_start();

$status = $_POST['status'];
$count = $_SESSION['user_id'];

echo $status;

if($status == 2){
    $newName = $_POST['newName'];

    update_user_name($newName, $count);

    header("Location: ../view/scanner.php");
}

if($status == 3){
    $randomcompany = rand(1,3);
    echo $randomcompany;

    insert_checkin($randomcompany, $count);

    header("Location: ../view/scanner.php");
}

?>
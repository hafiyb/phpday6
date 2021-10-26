<?php
session_start();

include '../model/SQLcheckin.php';

$status = $_POST['status'];
$count = $_POST['count'];

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
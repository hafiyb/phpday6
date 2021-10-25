<?php
function select_user_name($count){
    $sql = "SELECT * FROM user WHERE user_id='$count'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    return $row['user_name'];
}



?>
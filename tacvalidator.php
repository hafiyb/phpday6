<?php

    include "header.php";
    $count = $_POST['count'];
    $phone = $_POST['phone'];

    $sql = "SELECT user_tac FROM user WHERE user_id='$count'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo $row['user_tac'];

    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         $actualtac = $result['user_tac'];        }
    //   } else {
    //     echo "0 results";
    //   }

    // echo $actualtac;

    $noArray = $_POST['no1'].$_POST['no2'].$_POST['no3'].$_POST['no4'].$_POST['no5'].$_POST['no6'];
    echo $noArray;

    if($noArray == $row['user_tac']){
        echo "Account validated!";
        echo "<form method='post' action='scanner.php'>";
        echo "<input type='hidden' name='count' value='".$count."'>";
        echo "<input type='hidden' name='status' value='1'>";
        echo "<input type='submit' value='Okay'>";
        //echo "<input type='hidden' name='count' value='".$count."'>";
        echo "</form>";
    } else {
        echo "Error!";
        echo "<form method='post' action='tacno.php'>";
        echo "<input type='hidden' name='count' value='".$count."'>";
        echo "<input type=hidden name='phone' value='".$phone."'>";
        echo "<input type='submit' value='Return'>";
        //echo "<input type='hidden' name='count' value='".$count."'>";
        echo "</form>";
    }
?>
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

function select_checkin($count){

    include '../controller/header.php';
$sql = "SELECT * FROM check_in INNER JOIN company ON check_in.company_id = company.company_id WHERE user_id = $count";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='calendar_row'>";
            echo "<div class='calendar_company'>".$row['company_name']."</div>";
            echo "<div class='calendar_branch'>".$row['location']."</div>";
            echo "<div class='calendar_date'>".$row['check_in_time']."</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
}

function check_in_count($count){

    include '../controller/header.php';
    $sql = "SELECT * FROM check_in WHERE user_id='$count'";

    $result = $conn->query($sql);

    $checkincount = $result->num_rows;
    return $checkincount;
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mysejahteri</title>
    <meta name="robots" content="follow, index" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css?v=1.0.2" />
    <?php

    include 'index.php';

    ?>


</head>

<body>
<?php
    echo $_POST['phone'];
    $count = $_POST['count'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $hash = password_hash($password,PASSWORD_BCRYPT);

    $sql = "UPDATE user SET user_phone='$phone', user_password='$hash' WHERE user_id='$count'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $randnum = rand(100000,999999);

    echo $randnum;
    
    $sql = "UPDATE user SET user_tac='$randnum' WHERE user_id='$count'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
?>
    <div class="app__container">
        <div class="app__wrapper">
            <div class="app__logo"><img src="dist/images/svg/cvd_logo.svg" alt="" /></div>
            <div class="app__headline">Enter your <span class="app__name_newln">6-digit TAC</span></div>
            <div class="app__desc app__desc_tacno">
                <p class="app__desc_1">Once your number is verified, it cannot be further amended.</p>
            </div>
            <form action="tacvalidator.php" method="post">
                <div class="pin-wrapper">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="no1">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="no2">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="no3">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="no4">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="no5">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="no6">
                    <?php

                    echo "<input type=hidden name='count' value='".$count."'>";
                    echo "<input type=hidden name='phone' value='".$phone."'>";
                    
                    ?>
                
                </div>
                <div class="form_app_submit_container">
                <input type="submit">    
                <!-- <button type="button" class="form_app_submit btn_orange" onclick="location.href='scanner.html';">Complete <span class="next_arrow_icon"><img src="dist/images/svg/arrow_right_white.svg" alt=""></span></button> -->
                </div>
            </form>
        </div>
        <div class="app__artwork_name"><img src="dist/images/svg/cvd_artwork_tac.svg" alt=""></div>
    </div>

    <script src="dist/js/jquery-3.2.1.slim.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/pin.js"></script>
    <script src="dist/js/pin.js"></script>
    <script src="dist/js/app.js"></script>


</body>

</html>

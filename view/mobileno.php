<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mysejahteri</title>
    <meta name="robots" content="follow, index" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="../dist/css/style.css?v=1.0.2" />
<?php
include '../controller/header.php';
include '../model/SQLuser.php';
?>


</head>

<body>
<?php
    $name = $_POST['user_name'];
    echo $name;
    
    // $sql = "INSERT INTO user(user_name) VALUES ('$name')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    //   } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //   }

    insert_user('user_name', $name);

?>
    <div class="app__container">
        <div class="app__wrapper">
            <div class="app__logo"><img src="dist/images/svg/cvd_logo.svg" alt="" /></div>
            <div class="app__headline">Verify Your Number</div>
            <div class="app__desc app__desc_mobileno">
                <p class="app__desc_1">Please enter your mobile number in full, <span class="app__name_newln">so that a verification code can be successfully sent.</span></p>
            </div>
            <form action="../controller/mobilevalidation.php" method="post">
                <input id="phone" name="phone" type="tel">
                Password : <input id="phone" name="password" type="text" required>
                <?php
                // $name = $_POST['user_name'];

                // $sql = "SELECT user_id FROM user";

                // $result = $conn->query($sql);

                $count = user_count();

                echo $count;

                echo "<input type='hidden' name='count' value='$count'>";
                echo "<input type='hidden' name='user_name' value='$name'>";
                ?>
                
                <div class="form_app_submit_container">
                    <input type="submit">
                    <!-- <button type="button" class="form_app_submit btn_blue" onclick="location.href='tacno.html';">Verify <span class="next_arrow_icon"><img src="dist/images/svg/arrow_right_white.svg" alt=""></span></button> -->
                </div>
            </form>
        </div>
        <div class="app__artwork_name"><img src="dist/images/svg/cvd_artwork_mobileno.svg" alt=""></div>
    </div>

    <script src="dist/js/jquery-3.2.1.slim.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/intlTelInput.min.js"></script>
    <script src="dist/js/app.js"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
          // allowDropdown: false,
           autoHideDialCode: false,
           autoPlaceholder: "off",
          // dropdownContainer: document.body,
          // excludeCountries: ["us"],
          // formatOnDisplay: false,
          // geoIpLookup: function(callback) {
          //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          //     var countryCode = (resp && resp.country) ? resp.country : "";
          //     callback(countryCode);
          //   });
          // },
          // hiddenInput: "full_number",
           initialCountry: "my",
          // localizedCountries: { 'de': 'Deutschland' },
          // nationalMode: false,
          // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          // placeholderNumberType: "MOBILE",
           preferredCountries: ['my', 'sg'],
           separateDialCode: true,
           utilsScript: "dist/js/utils.js",
        });
    </script>
</body>

</html>

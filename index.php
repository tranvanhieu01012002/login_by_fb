<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test Login by facebook</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
    <?php
    if (isset($_SESSION['FB_ID']) && $_SESSION['FB_ID'] != "") {
        echo "welcome :" .$_SESSION['FB_NAME'];
        echo "<br>";
        ?>
    <a href="logout.php">Logout</a>
    <?php
    }
    else{
    ?>
    <a onclick="fbLogin()" href="javascript:void(0)">Login with FB</a>
    <?php
    }
    ?>
</body>

</html>
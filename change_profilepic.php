<?php
ob_start();
session_start();
if(isset($_GET['pic']) && isset($_GET['email']))
{
    $ini = parse_ini_file('app.ini.php');

    // Create connection
    $conn = new mysqli(
        $ini['db_host'],
        $ini['db_user'],
        $ini['db_password'],
        $ini['db_name']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_GET['email'];
    $pic = $_GET['pic'];
    $sql = "UPDATE verified_users SET avatar='$pic' WHERE email='$email'";
    echo $pic . '-' .$email;
    if ($conn->query($sql) === TRUE) {
        $_SESSION["avatar"] = $pic;
        header("Location: profile.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
 ?>

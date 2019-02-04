<?php
echo 'c0';
$ini = parse_ini_file('app.ini.php');
echo 'c0-1';


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //$email_id = $pass = $firstname = $lastname = $code = ''

    $email = sanitise($_POST['email']);
    echo 'c1';
    $pass = sanitise($_POST['password']);
    echo 'c2';
    $firstname = sanitise($_POST['firstname']);
    echo 'c3';
    $lastname = sanitise($_POST['lastname']);
    echo 'c4';
    $code= sanitise(substr(md5(mt_rand()),0,15));
    echo 'c5';

    $conn = new mysqli(
        $ini['db_host'], 
        $ini['db_user'], 
        $ini['db_password'], 
        $ini['db_name'] 
    );
    echo 'c6';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "insert into unverified_users values('', '$firstname', '$lastname','$email','$pass','$code')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    } else {
        echo "Error inserting values: " . $conn->error;
    }

    $message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject = "Activation Code For Psacworld";
    $from = $ini['app_email'];
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verify.php">verify.php?id='.$last_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);
    
    echo "An Activation Code Is Sent To You Check You Emails";
}

if(isset($_GET['id']) && isset($_GET['code']))
{
    $id=$_GET['id'];
    $code=$_GET['id'];

    $conn = new mysqli($ini['db_host'], $ini['db_user'], $ini['db_password'], $ini['db_name']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "select firstname, lastname, email, password from unverified_users where id='$id' and code='$code'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $email=$row['email'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $pass=$row['password'];
        $sql = "insert into verified_users values('', '$firstname', '$lastname','$email','$pass', 'no', 0)";
        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Error inserting values: " . $conn->error;
        }
        $sql = "delete from unverified_users where id='$id' and code='$code'";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error deleting " . $conn->error;
        }
    }
    } else {
        echo "0 results";
    }

    
}

function sanitise($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>
<?php
echo 'c0';
$ini = parse_ini_file('app.ini.php');
echo 'c0-1';
include("utils.php");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //$email_id = $pass = $firstname = $lastname = $code = ''

    $email = sanitise($_POST['email']);

    $pass = password_hash(sanitise($_POST['password']) . $ini['app_secret_key'], PASSWORD_DEFAULT);

    $firstname = sanitise($_POST['firstname']);

    $lastname = sanitise($_POST['lastname']);

    $code= sanitise(substr(md5(mt_rand()),0,15));

    $conn = new mysqli(
        $ini['db_host'], 
        $ini['db_user'], 
        $ini['db_password'], 
        $ini['db_name'] 
    );


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql_uv = "SELECT * FROM unverified_users WHERE email = '$email'";
    $res_uv = mysqli_query($conn, $sql_uv);
    $sql_v = "SELECT * FROM verified_users WHERE email = '$email'";
    $res_v = mysqli_query($conn, $sql_v);
    if (mysqli_num_rows($res_uv) > 0) {
        echo "mail already taken";  
    }else if(mysqli_num_rows($res_v) > 0){
        echo "mail already taken";    
    }else{
           $sql = "insert into unverified_users values('$firstname', '$lastname','$email','$pass','$code')";
            $results = mysqli_query($conn, $sql);
                    
            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
            } else {
                echo "Error inserting values: " . $conn->error;
            }
           echo 'Saved!';
           exit();
    }
    
    
/*
    $message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject = "Activation Code For Psacworld";
    $from = $ini['app_email'];
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verify.php?email='.$email.'&code='.$code.'">click to verify</a>to activate your account.';
    $headers = "From:".$from;
    die();
    mail($to,$subject,$body,$headers);*/
      
    
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->setFrom($ini['app_email'], 'Your Name');
$mail->addAddress('arj.python@gmail.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}


    echo "An Activation Code Is Sent To You Check You Emails";

}

if(isset($_GET['email']) && isset($_GET['code']))
{
    $email=$_GET['email'];
    $code=$_GET['code'];
    echo $email;
    $conn = new mysqli($ini['db_host'], 
        $ini['db_user'], 
        $ini['db_password'], 
        $ini['db_name']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "select firstname, lastname, email, password from unverified_users where email='$email' and code='$code'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $email=$row['email'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $pass=$row['password'];
        $sql = "insert into verified_users values('$firstname', '$lastname','$email','$pass', 'no', 0)";
        $results = mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Error inserting values: " . $conn->error;
        }
        $sql = "delete from unverified_users where email='$email' and code='$code'";
        $result = mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error deleting " . $conn->error;
        }
    }
    } else {
        echo "0 results";
    }

    
}

?>
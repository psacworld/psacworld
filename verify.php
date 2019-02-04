<?php
echo 'c0';
$ini = parse_ini_file('app.ini.php');
echo 'c0-1';

use PHPMailer\PHPMailer\PHPMailer;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //$email_id = $pass = $firstname = $lastname = $code = ''

    $email = sanitise($_POST['email']);
    echo 'c1';
    $pass = password_hash(sanitise($_POST['password']) . "secretkey", PASSWORD_DEFAULT);
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
/*
    $message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject = "Activation Code For Psacworld";
    $from = $ini['app_email'];
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verify.php">verify.php?id='.$last_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    die();
    mail($to,$subject,$body,$headers);*/
      
    
//Import the PHPMailer class into the global namespace

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'armij7@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'apple654321';
//Set who the message is to be sent from
$mail->setFrom('armij7@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('armij7@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($email, $firstname . ' ' . $firstname);
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}


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
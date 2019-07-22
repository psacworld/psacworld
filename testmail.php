<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../../vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mail.compilertest.online';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'admin@compilertest.online';
$mail->Password = 'pass1234pass1234';
$mail->setFrom('mail', 'Your Name');
$mail->addReplyTo('mail', 'Your Name');
$mail->addAddress('mail', 'Receiver Name');
$mail->Subject = 'PHPMailer SMTP message';
$mail->Body = 'This is a plain text message body';
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>

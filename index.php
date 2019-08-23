<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'yourgmailid';
$mail->Password = 'yourpassword';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;

$mail->setFrom('google@gmail.com', 'Computerengineeringfree4u');
$mail->addReplyTo('googleto@gmail.com', 'Computerengineeringfree4u');

// Add a recipient
$mail->addAddress('someone@gmail.com');

// Add cc or bcc 
$mail->addCC('someone1@gmail.com');
$mail->addBCC('someone2@gmail.com');

// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '
    <h2>Send HTML Email using SMTP in PHP</h2>
    <p>It is a test email by Computerengineeringfree4u, sent via SMTP server with PHPMailer using PHP.</p>
    <p>Read the tutorial and download this script from <a href="http://computerengineeringfree4u.xyz">Computerengineeringfree4u</a>.</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
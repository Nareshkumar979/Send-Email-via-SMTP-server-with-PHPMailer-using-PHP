<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include PHPMailer library files
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
$mail = new PHPMailer;

// SMTP configuration
//$mail->SMTPDebug = 2; // Enable verbose debug output if needed to check
$mail->isSMTP();
$mail->Host     = 'YOUR OUTGOING EMAIL SERVER';// This is the Outgoing Server
$mail->SMTPAuth = true;
$mail->Username = 'SMTP_USERNAME_OR_EMAIL_ADDRESS';// This is the SMTP Username
$mail->Password = '*************';// This is the SMTP Password
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
$mail->setFrom('SMTP_EMAIL_ADDRESS', 'FROM_USERNAME');

// Add a recipient
$mail->addAddress('RECIPIENT_EMAIL_ADDRESS','RECIPIENT_USERNAME');

// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '<h2>Send HTML Email using SMTP in PHP</h2><p>It is a test email by Developer, sent via SMTP server with PHPMailer using PHP.</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
?>

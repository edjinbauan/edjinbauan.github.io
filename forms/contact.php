
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'path/to/forms/contact.php';
require 'path/to/forms/contact.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'ejbauan@gmail.com';  // Replace with your Gmail username
$mail->Password = 'yevnhbsfgvyrfzem';  // Replace with your Gmail password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // TLS encryption
$mail->Port = 587;  // Port for TLS

// Sender and recipient email addresses
$mail->setFrom('ejbauan@gmail.com', 'Edjin Bauan');  // Replace with your name and email
$mail->addAddress('ejbauan@gmail.com', 'Recipient Name');  // Replace with the recipient's name and email

// Email subject and body
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email sent using PHPMailer.';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
}

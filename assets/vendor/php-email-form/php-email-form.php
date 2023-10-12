<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'ejbauan@gmail.com'; // Replace with your receiving email address
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the email headers
    $headers = 'From: ' . $from_name . ' <' . $from_email . ">\r\n";
    $headers .= 'Reply-To: ' . $from_email . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'OK';
    } else {
        echo 'Error sending email.';
    }
} else {
    header("Location: your_form_page.php");
}
?>

<?php

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        // Submit form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "gatillom@yahoo.com";
        $body = "";

        $body .= "From: " . $name . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        mail($to, $subject, $body);

        if (mail($to, $subject, $body)) {
            $alert_message = 'Your message has been sent successfully!';
            $alert_class = 'alert-success';
        } else {
            $alert_message = 'Something went wrong. Please try again.';
            $alert_class = 'alert-danger';
        }

    } else {
        $alert_message = 'Please enter a valid email address.';
        $alert_class = 'alert-warning';
    }
}
?>
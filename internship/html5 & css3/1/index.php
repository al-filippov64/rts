<?php 

// Recipients
$to = 'learningrts@gmail.com';

// Subject
$subject = 'This is our test email';

// Message
$message = '<h1>Hi there.</h1><p>Thanks for testing!</p>';

// Headers
$headers = "From: The Send Name: <sender@johnmorrisonline.com\r\n";
$headers .= "Reply-To: replyto@johnmorrisonline.com\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
mail($to, $subject, $message, $headers);
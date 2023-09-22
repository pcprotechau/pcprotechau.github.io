<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'pcprotechau@gmail.com';
$subject = 'New Message from Website';
$body = "Name: $name\nEmail: $email\n\n$message";

mail($to, $subject, $body);

header('Location: thank_you.html'); // Redirect to a thank you page
?>

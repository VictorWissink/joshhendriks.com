<?php
$name = $_POST["firstname"];
$email = $_POST["email"];
$message = $_POST["message"];
$formcontent="From: $name \n Email: $email \n Message: $message";
$recipient = "contact@joshhendriks.com";
$subject = "Contact Form";
$headers = "From: contact@joshhendriks.com";
mail($recipient, $subject, $formcontent, $headers) or die("Error!");
header('Location: ../contact-thank-you.html');
exit();
?>

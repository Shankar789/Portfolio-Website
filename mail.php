<?php
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$phone=$_POST["phone"];

$to      = 'shankar.dinesh789@gmail.com';
$subject = 'mywebsite shankar789';

$message = "sub:mywebsite \n name:$name\n Phone:$phone \n msg:$msg ";
$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



header("Location: http://smartarrows.000webhostapp.com/#section4");

?> 
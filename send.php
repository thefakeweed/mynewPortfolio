<?php

$name = $_POST['your-name'];
$email = $_POST['your-email'];
$message = $_POST['your-message'];
$request = $_POST['submit'];

$to = "mostafamasri@outlook.com";
$subject  ="Tutorial request";
$body = "this is a message from your website's form \n \n $request";


mail ($to,$subject, $body);

echo "message sent!";




?>

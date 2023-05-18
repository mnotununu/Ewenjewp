<?php 

$fname = $_POST['fname'];

$sname = $_POST['sname'];

$email = $_POST['email'];

$message = $_POST['message'];

$formcontent = "Name:$fname \n Surname $sname \n Email:$email \n Message:$message";

$recipient = "admin@ewenjewp.co.za";

$subject =  'WEBSITE ENQUIRY';

//$mailheader = "From: $fname \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

echo "Ola! thank you for contacting EWE NJE-WP, we will get back to you shorty,";







?>


<?php 
$to = "mickeyruni18@gmail.com";
$subject = "enquiry"; 
$name = $_POST['name'];
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$headers = "From: $email"; $headers1 = "Name: $name \n Email: $email \n Phone: $phone \n Subject: $subject \n Messages: $message ";
$sent = mail($to, $subject, $headers1 ,$headers ) ; 
if($sent) { header ("Location:index.html"); 
} 
else 
{print "We encountered an error sending your mail"; } 
?>
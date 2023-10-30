<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://ed-dev2001.vercel.app/';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Phone: $phone.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'ednelpadernal4@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>

<?php
$name = $-POST['name'];
$vistor_email = $-POST['email'];
$subject = $-POST['subject'];
$message = $-POST['message'];

$email_from = 'momoduh.gray@gmail.com';

$email_subject = 'New Form submission';

$email_body = "User Name:"$name.\n".
"User Email: $vistor_email.\n".
"subjest: $subject.\n".
User Message: $message .\n";

$to = 'momoduh.gray@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: "$vistor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");


?>
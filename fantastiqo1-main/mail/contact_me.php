<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'fantastiqo64@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Enquiry From Website:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\n Name: $name\n\n Email: $email_address\n\nMessage:\n $message";
$headers = "From: Fantastiqo_WEB_Enquiry"; 
$headers .= "\n"."Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

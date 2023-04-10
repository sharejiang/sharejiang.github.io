<?php	
	if (empty($_POST['first_name']) && strlen($_POST['first_name']) == 0 || empty($_POST['last_name']) && strlen($_POST['last_name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['subject']) && strlen($_POST['subject']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$optin = $_POST['optin'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "First_Name: $first_name \nLast_Name: $last_name \nEmail: $email \nSubject: $subject \nMessage: $message \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['company']) && strlen($_POST['company']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['titel']) && strlen($_POST['titel']) == 0 || empty($_POST['samenvatting']) && strlen($_POST['samenvatting']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$titel = $_POST['titel'];
	$samenvatting = $_POST['samenvatting'];
	
	$to = 'leonvandermeulen@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from foss4gnl-2017.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nCompany: $company \nEmail: $email \nTitel: $titel \nSamenvatting: $samenvatting \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: leonvandermeulen@gmail.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
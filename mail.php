<?php
	$email_to = "ba.jakobsen@gmail.com";
	$sender_name = stripslashes($_POST["sender_name"]);
	$sender_email = stripslashes($_POST["sender_email"]);
	$sender_message = stripslashes($_POST["sender_message"]);
	$email_subject = "Melding fra Neurotech-Design";
	$headers = "From: " . $sender_email . "\n";
	$headers .= "Reply-To: " . $sender_email . "\n";
	$message = "Name: ". $name . "\r\nMessage: " . $message;
/*	$sender_name = stripslashes($_POST["sender_name"]);
	$sender_email = stripslashes($_POST["sender_email"]);
	$sender_message = stripslashes($_POST["sender_message"]);*/
	$response = $_POST["response"];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6Lc_TUoUAAAAAGsZuxPVPdnZQ35ERS_-Q0lpPYaq',
		'response' => $_POST["response"]);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);

	if ($captcha_success->success==false) {
		echo "<p>You are a bot! Go away!</p>";
	} else if ($captcha_success->success==true) {
		ini_set("sendmail_from", $sender_email);
		$sent = mail($email_to, $email_subject, $sender_message, $headers, "-f" .$sender_email);
		if ($sent)
		{
			 
		} else {
			echo "Det var en feil under sending av melding, vennligst prøv igjen.";
		}
	}
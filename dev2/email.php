<?php
if(isset($_POST['email'])) {
	if(strlen($_POST['username']) > 1) {
	
	
	die('no spam');
	
	}else{

		$email_will = "will@tiny-rhino.co.uk";
		$email_perry = "perry@tiny-rhino.co.uk";
		$email_subject = "Website interest";
		 
		$first_name = $_POST['name']; 
		$email_from = $_POST['email']; 
		$comments = $_POST['comment']; 
	  
		$email_message = "Contact from tiny rhino.\n\n";
		 
		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}
		 
		$email_message .= "First Name: ".clean_string($first_name)."\n";
		$email_message .= "Email: ".clean_string($email_from)."\n";
		$email_message .= "Comments: ".clean_string($comments)."\n";

		 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	
	
	if(mail($email_will, $email_subject, $email_message, $headers) && mail($email_perry, $email_subject, $email_message, $headers)){
  	  echo 'mail successful send';
	}
	else{
    	echo 'there’s some errors to send the mail, verify your server options';
	}
	
	
}

}


?>

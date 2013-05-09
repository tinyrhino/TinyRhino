<?php
if(isset($_POST['email'])) {
	if(strlen($_POST['username']) > 1) {
	
	
	die('no spam');
     

	
	}else{
		
				// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to = "will@tiny-rhino.co.uk";
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
	@mail($email_to, $email_subject, $email_message, $headers);  
		
		}

}
?>

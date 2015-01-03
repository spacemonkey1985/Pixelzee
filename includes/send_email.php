<?php

	if(isset($_POST['name'])){
		if($_POST['name'] != ''){
			$to = 'info@pixelzee.com';
			$subject = 'Pixelzee Contact Us - ' . $_POST['interest'];
			$body = "Name: " . $_POST['name'] . "\r\nEmail: " . $_POST['email'] . "\r\nMessage:\r\n" . $_POST['message'];
			$headers = 'From: info@pixelzee.com' . "\n" .
						'Bcc: simon@simoncoulton.co.uk' . "\n" .
						'Reply-To: info@pixelzee.com' . "\n" .
						'X-Mailer: PHP/' . phpversion();
		
			mail($to, $subject, $body, $headers);
			
			$to =  $_POST['email'];
			$subject = 'Pixelzee Query - ' . $_POST['interest'];
			$body = "Dear " . $_POST['name'] . "\r\n\r\nThank you for getting in touch. Your query has been sent to our team and someone will respond as soon as they are available.";
			$headers = 'From: info@pixelzee.com' . "\n" .
						'Reply-To: info@pixelzee.com' . "\n" .
						'X-Mailer: PHP/' . phpversion();
		
			mail($to, $subject, $body, $headers);
			
			header("Location: ../thankyou.php?type=email");
		}
	}
	else {
		header("Location: ../contact.php");
	}
	
?>
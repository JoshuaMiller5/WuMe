<?php
if(!empty($_POST["send"])) {
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "admin@wugomedia.me";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
		
	<input type="hidden" name="send" value="1">	
	}
}
?>

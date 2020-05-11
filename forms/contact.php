<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $subject = $_POST['subject'];
   $mailFrom = $_POST['mail'];
   $message = $_POST['message'];
	
   $mailTo = "admin@wugomedia.me";
   $headers = "From: ".$mailFrom;
   $txt = "You have recived an mail from ".$name.".\n\n".$message;
   
   mail($mailTo, $subject, $txt, $headers);
   header("Location: contact.html?mailsend");
}

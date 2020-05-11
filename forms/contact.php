<?php

if(isset($_POST["send"])) {
   $name = $_POST["Name"];
   $subject = $_POST["Subject"];
   $mailFrom = $_POST["mail"];
   $message = $_POST["message"];
	
   $mailTo = "admin@wugomedia.me";
   $headers = "From: ".$mailFrom;
   $txt = "You have recived an mail from ".$name.".\n\n\".$message;
   
   mail($mailTo, $subject, $txt, $headers);
   header("Location: contact.html?mailsend");
}

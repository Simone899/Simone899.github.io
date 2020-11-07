<?php

// echo "<pre>";

// print_r($_POST);

// echo'</pre>';

if(isset($_POST['submit'])){
	$message_sent = false;
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$name = $_POST['name'];
	    $subject = $_POST['subject'];
	    $mailFrom = $_POST['mail'];
	    $message = $_POST['message'];

	    $mailTo = "bence.luo899@gmail.com";
	    $headers = "From: ".$mailFrom;
	    $txt = "You have received an email from".$name.".\n\n".$message;

	    mail($mailTo, $subject, $txt, $headers);

	    header("Location: contact.html?mailsend");

	    $message_sent = true;


	}
    

}

?>
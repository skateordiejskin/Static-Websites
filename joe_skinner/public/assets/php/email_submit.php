<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$to = "joe@joeskinner.me";
	$subject="Message from Website";
	$name = $firstName." ".$lastName;

	if(isset($firstName)){
	echo $message = "Name: $name \n Email: $email \n Phone: $phone \n Comments: $comment";

	mail($to, "Subject: $subject", $message);

	}
	else{

	}

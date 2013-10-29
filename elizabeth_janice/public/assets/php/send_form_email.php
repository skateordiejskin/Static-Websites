<?php
  
  $name = $_POST['name']; 
  $phone = $_POST['phone'];
  $subject = $_POST['subject'] ;
  $comment = $_POST['comments'] ;
  $to = "eejanice@yahoo.com";
  $email= $_POST['email'] ;
  
  $totalMessage = " Name:		$name  \n Phone: 		$phone \n Comments:		$comment \n";

  if (mail( $to, "Subject: $subject", $totalMessage, "From: $email" )){
  	 echo("<p>Message successfully sent!</p> <p><br />Redirecting Now...</p>"); 
  	 echo "<meta http-equiv=\"refresh\" content=\"3;url=";
		echo "http://www.elizabethjanice.com\" />";
  }
  
   else {
   echo("<p>Message delivery failed...</p> ");
  }
 ?>
 
 
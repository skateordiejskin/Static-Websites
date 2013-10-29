<?php

if($_POST['zip']==NULL){
if ((isset($_POST['email']))&& (isset($_POST['name'])) && (isset($_POST['content']))){
  $email = $_POST['email'];
  $subject = "A message from ".$_POST['name'];
  $message = $_POST['content'];
  mail("clip@csi.cuny.edu", $subject, $message, "From:" . $email);
  echo "Thank you for contacting us!";
  header("Location:http://www.library.csi.cuny.edu/continue/clip/index.html");
  }
  }
  else{
  	echo "GET OUT OF HERE ROBOT";
  	}
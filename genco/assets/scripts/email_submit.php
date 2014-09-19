<?php

$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$location1= $_POST['location1'];
$location2 = $_POST['location2'];
$maint = $_POST['maint'];
$modern = $_POST['modern'];
$specs = $_POST['specs'];
$witness = $_POST['witness'];
$reports = $_POST['reports'];
$numElev = $_POST['elevators'];
$to = "josephskinner08@gmail.com";
$subject="Request a Quote";

if(isset($address2)):
	$address = $address1.' '.$address2;
else:
	$address = $address1;
endif;
if(isset($location2)):
	$location = $location1.' '.$location2;
else:
	$location = $location1;
endif;
echo $message = "
			Name: $name \n
			Email: $email \n
			Phone: $phone \n
			Company: $company \n
			Address: $address \n
			Location: $location \n
			# of Elevators: $numElev \n

			";

mail($to, "Subject: $subject", $message);

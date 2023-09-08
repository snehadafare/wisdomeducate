<?php
if(isset($_POST['submit']))
{
	#Receive user input
	$email=$_POST['email'];
	
	$to='snehadafare89@gmail.com';
	$subject='Newsletter Email Details';
	$message="Newsletter Email Details"."\n"."<hr>"."\n"."Email: ".$email;
	$headers="From: ".$email;
	
	if(mail($to, $subject, $message, $headers))
	{
		echo "<h1>Your email address has been sent successfully! Thank you"." ".$email.", We will contact you shortly!</h1>";
	}
	else
	{
		echo "Something Went wrong!";
	}
}
?>
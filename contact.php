<?php
if(isset($_POST['submit']))
{
	#Receive user input
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$to='info@wisdomedugate.com';
	$subject='Contact Form Details';
	$msg="Contact Form Details"."\n"."Name: ".$name."\n"."Phone: ".$phone."\n"."Email: ".$email."\n"."Message: ".$message;
	$headers="From: ".$email;
	
	if(mail($to, $subject, $msg, $headers))
	{
		echo "<h1>Your message has been sent successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
	}
	else
	{
		echo "Something Went wrong!";
	}
}
?>
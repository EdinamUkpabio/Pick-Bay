<?php
	$conn=new mysqli("localhost","root","","users");

	$name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$message=$_GET['message'];
	
	$query='INSERT INTO `contct_info`(`name`, `email`, `phone`, `message`) VALUES ("'.$name.'","'.$email.'","'.$phone.'","'.$message.'")';
	
	$result=mysqli_query($conn,$query);
	
	
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
   

    <title>Contact Form </title>
  </head>

<body style="background-color: #eaeffa;">
		<h4 style="padding:150px;font-style: oblique; font-family:Courier New;" >Dear PickBay customer,<br><br>Thanks for reaching out!We’re thrilled to hear from you.
		Our inbox can’t wait to get your messages, so talk to us any time you like.<br><br><br>Cheers!</h4>


</body>



</html>

<?php
	session_start();
		require_once('dba_conn.php');
			
	?>
	
<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<body class="img" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign Up</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<h3 class="text-center mb-4">Create Your Account</h3>
						<form class="signup-form" action="add_user.php" method="POST">
		      		<div class="form-group mb-3">
		      			<label class="label" for="name">Name</label>
		      			<input type="name" class="form-control" placeholder="Name" name='name'>
		      			<span class="icon fa fa-user-o"></span>
		      		</div>
		      		<div class="form-group mb-3">
		      			<label class="label" for="email">Email Address</label>
		      			<input type="email" class="form-control" placeholder="Email" name='email' required>
		      			<span class="icon fa fa-paper-plane-o"></span>
		      		</div>
	            <div class="form-group mb-3">
	            	<label class="label" for="pass">Password</label>
	              <input id="password" type="password" class="form-control" placeholder="Password" name='pass' required>
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <span class="icon fa fa-lock"></span>
	            </div>
	            <div class="form-group mb-3">
	            	<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name='address' placeholder="1234 Main St" required>
	              <span class="icon fa fa-lock"></span>
	            </div>
				<div class="form-group mb-3">
		      			<label for="address2">Address 2</label>
						<input type="text" class="form-control" id="address2" name='address2' placeholder="Apartment, studio, or floor" required>
		      			<span class="icon fa fa-paper-plane-o"></span>
		      	</div>
				<div class="form-group mb-3">
		      			 <label for="city">City</label>
						<input type="text" class="form-control" id="city" name='city' placeholder="City" required>
		      			<span class="icon fa fa-paper-plane-o"></span>
		      	</div>
				<div class="form-group mb-3">
		      			 <label for="state">State</label>
						<input type="text" class="form-control" id="state" name='state' placeholder="State" required>
		      			<span class="icon fa fa-paper-plane-o"></span>
		      	</div>
				<div class="form-group mb-3">
		      			 <label for="zip">Zip</label>
						<input type="number_format" class="form-control" id="zip" name='zip' placeholder="Zip Code" required>
		      			<span class="icon fa fa-paper-plane-o"></span>
		      	</div>
				
				
				
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
	          <p>I'm already a member! <a href="signin.php">Sign In</a></p>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


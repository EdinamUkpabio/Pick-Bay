<?php
	session_start();
		require_once('dba_conn.php');
	
		if(!isset($_SESSION['islogin']))
		{
			?>
			<script>
				window.location = "signin.php";
			</script>
			<?php
			
		} 
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Car Rental Website</title>
	<!-- Link to CSS -->
	<link rel="stylesheet" type="text/css" href="car.css">
	<!-- Boss icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	
</head>
<body>

	<!-- Header -->
	<header>
		<a href="#" class="logo"><img src="rent.png" alt="icon"></a>
		<div class="bx bx-menu" id="menu-icon"></div>
		<ul class="navbar">
			<li><a href="#home">Home</a></li>
			<li><a href="ride.html">Ride</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="contact\contact.php">Contact Us</a></li>
			
		</ul>
		<div class="header-btn">
			<a href="signup.php" class="sign-up" target="blank">Sign Up</a>
			<a href="signin.php" class="sign-in" target="blank">Sign In</a>
			<a href="logout.php" class="sign-in" target="blank">LogOut</a>
		</div>
	</header>
	<!-- HOME -->
	<section class="home" id="home">
		<div class="text">
			<h1><span>Looking to<br>rent a car</span></h1>
			<p>lorem ipsum i dont know how what <br>is that mean but it use in every paragraph</p>
			<div class="app-stores">
				<img src="ios.png">
				<img src="play.png">
				
			</div>
		</div>
		<div class="form-container">
			<form action="">
				<div class="input-box">
					<span>Location</span>
					<input type="search" name="" id="" placeholder="Search Places">
				</div>
				<div class="input-box">
					<span>Pick-Up Date</span>
					<input type="Date" name="">
				</div>
				<div class="input-box">
					<span>Return Date</span>
					<input type="Date" name="">
				</div>
				<input type="submit" name="" class="btn">
			</form>
		</div>
	</section>
	
	
<!-- Ride Section -->
<section class="ride" id="ride">
	<div class="heading">
		<span>How It's Work</span>
		<h1>Rent with 3 Easy Steps</h1>
	</div>
	<div class="ride-container">
		<div class="box">
			<i class='bx bxs-map'></i>
			<h2>Choose a Location</h2>
			<p>how are you sill boys and is evrything okay these days </p>
		</div>
		<div class="box">
		    <i class='bx bxs-calendar-check'></i>
			<h2>Pick-Up Dates</h2>
			<p>how are you sill boys and is evrything okay these days </p>
		</div>
		<div class="box">
			<i class='bx bxs-calendar-star'></i>
			<h2>Book A Car</h2>
			<p>how are you sill boys and is evrything okay these days </p>
		</div>
	</div>
</section>
<!-- Services -->
<section class="services" id="services">
	<div class="heading">
		<span>Best Services</span>
		<h1>Explore Out Top Deals<br> From Top Rated Dealers</h1>
	</div>
	<div class="services-container">
		<div class="box">
			<div class="box-img">
				<img src="car1.jpg" alt="car">
			</div>
			<p>2020</p>
			<h3>Honda Civic</h3>
			<h2>$ 7,000 | 24HR <span>/month</span></h2>
			<a href="booking\booking.html" class="btn">Rent Now</a>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="car2.png" alt="car">
			</div>
			<p>2021</p>
			<h3>Kia Sportage</h3>
			<h2>$ 9,500 | 24HR <span>/month</span></h2>
			<a href="booking\booking.html" class="btn">Rent Now</a>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="car3.jpg" alt="car">
			</div>
			<p>2017</p>
			<h3>Land Cruiser</h3>
			<h2>$ 13,000 | 24HR <span>/month</span></h2>
			<a href="booking\booking.html" class="btn">Rent Now</a>
		</div>


		<div class="box">
			<div class="box-img">
				<img src="car4.jpg" alt="car">
			</div>
			<p>2019</p>
			<h3>Toyota Aqua</h3>
			<h2>$ 5000 | 24HR <span>/month</span></h2>
			<a href="booking\booking.html" class="btn">Rent Now</a>
		</div>	


		<div class="box">
			<div class="box-img">
				<img src="car5.jpg" alt="car">
			</div>
			<p>2018</p>
			<h3>Revo</h3>
			<h2> $ 12,000 | 24HR <span>/month</span></h2>
			<a href="booking\booking.html" class="btn">Rent Now</a>
		</div>


		<div class="box">
			<div class="box-img">
				<img src="car6.jfif" alt="car">
			</div>
			<p>2017</p>
			<h3>Toyoto Corolla</h3>
			<h2>$ 5,000 | 24HR <span>/month</span></h2>
			<a href="booking\booking.html" class="btn">Rent Now</a>
		</div>
	</div>
</section>
<!-- About -->
<section class="about"  id="about">
	<div class="heading">
		<span>About Us</span>
		<h1>Best Customer Experience</h1>
	</div>
	<div class="about-container">
		<div class="about-img">
			<img src="about.png" alt="about">
		</div>
		<div class="about-text">
			<span>About Us</span>
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			 <a href="#" class="btn">Learn More</a>
		</div>
	</div>
</section>
<!-- Reviews -->
<section class="reviews" id="reviews">
	<div class="heading">
		<span>Reviews</span>
		<h1>Whats Our Customer Say</h1>
	</div>
	<div class="reviews-container">
		<div class="box">
			<div class="rev-img">
				<img src="pic1.JPG" alt="reviews">
			</div>
			<h2>Zeeshan Khan</h2>
			<div class="stars">
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star-half' ></i>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			</p>
		</div>


		<div class="box">
			<div class="rev-img">
				<img src="pic2.jpeg" alt="reviews">
			</div>
			<h2>Zaki Ur Rehman</h2>
			<div class="stars">
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star-half' ></i>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			</p>
		</div>



		<div class="box">
			<div class="rev-img">
				<img src="pic4.JPG" alt="reviews">
			</div>
			<h2>Edinam_Ukpabio</h2>
			<div class="stars">
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star' ></i>
				<i class='bx bxs-star-half' ></i>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			</p>
		</div>


	</div>
</section>
<!-- Newsletter -->
<section class="newsletter">
	<h2>Subscribe To Newsletter</h2>
	<div class="box">
		<input type="text" placeholder="Enter your Email....">
		<a href="#" class="btn">Subscribe</a>
	</div>
</section>
<div class="copyright">
	<p>&#169; Copyright</p>
	<div class="social">
		<a href="#"><i class='bx bxl-facebook-circle' ></i></a>
		<a href="#"><i class='bx bxl-instagram' ></i></a>
		<a href="#"><i class='bx bxl-twitter' ></i></a>
	</div>
</div>
<!-- Scroll Reveal -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- Link To JS -->
<script type="text/javascript" src="car.JS"></script>
</body>
</html>




























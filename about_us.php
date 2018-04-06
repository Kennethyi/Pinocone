<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="utf-8"/>
<meta name="description" content="about the company"/>

<!-- Materialize CSS -->
		<link rel="stylesheet" href="css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="js/materialize.js"></script>
		
		<!-- AngularJS -->
		<script src="js/angular.js"></script>
		
		<!-- AngularJS -->
		<script src="js/food_menu.js"></script>

<!-- Material icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="stylesheet" href="css/food_menu.css">

</head>
<body>

<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="food_menu.php">Food Menu</a></li>
						<li><a href="localhost/Pinocone/about_us.php">About Us</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</nav>
		</header>
<div class="row container">
<h1>About Us, Pinocone Catering Company</h1>

			<div class="col s4">
				<h3 class="center-align advantages">Background</h3>
				<p class="center-align">Pinocone Catering Company started back in 2010. It was initially a home-based catering company manage by 2 housewives that receives catering order from friends and family. Today, Pinocone Catering has experience a growth in business and has served thousands of customers across Sarawak.</p>
			</div>
<div class="col s4">
				<h3 class="center-align advantages">Our Focus</h3>
				<p class="center-align">For the past 8 years, we have been focusing on food delivery services for schools and various companies in Sarawak 
</p>
			</div>
			<div class="col s4">
				<h3 class="center-align advantages">Our Goals</h3>
				<p class="center-align">We at Pinocone Catering Company aims to deliver outstanding service with a commitment to quality, safety and health whether in the workplace, school and colleges, hospitals, at leisure, on the move or in remote environment.</p>
			</div>
			
		</div>
		
		
		

<footer class="page-footer z-depth-3">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Pinocone</h5>
						<p class="grey-text text-lighten-4">Online Food Catering.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="localhost/Pinocone/about_us.php">About Us</a></li>
							<li><a class="grey-text text-lighten-3" href="localhost/Pinocone/contact_us.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
				&copy; 2018 Pinocone
				<a class="grey-text text-lighten-4 right" href="#!">Pinocone</a>
				</div>
			</div>
		</footer>

</body>






</html>
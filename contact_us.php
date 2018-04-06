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
<title>Contact Us</title>
<meta charset="utf-8"/>
<meta name="description" content="contacts of the company"/>

		<!-- Materialize CSS -->
		<link rel="stylesheet" href="css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="js/materialize.js"></script>
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
		<!-- AngularJS -->
		<script src="js/angular.js"></script>

</head>
<body>

<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="food_menu.php">Food Menu</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="<?php include 'includes/index_user_nav_tab.php'?>
					</ul>
				</div>
			</nav>
		</header>
<div class="row container">
<h1 class="center-align advantages">Our Contact</h1>
<p class="center-align advantages">Any enquiries? Ask us through the following methods!</p>

<div class="col s4">
				<p class="center-align advantages">1. Call Us!</p>
				<p class="center-align">If you are more comfortable with making a phone call, we can be reach at +6082-343566.</p>
			</div>

			<div class="col s4">
				<p class="center-align advantages">2. Email Us!</p>
				<p class="center-align">Are you more comfortable in communicating using email? Then, email us at PinoCone_Cat@gmail.com</p>
			</div>
<div class="col s4">
				<p class="center-align advantages">3. Chat With Us Through Facebook!</p>
				<p class="center-align">Follow our page, Pinocone Catering Company to keep track of our updates  and chat with us. 
</p>
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
							<li><a class="grey-text text-lighten-3" href="about_us.php">About Us</a></li>
							<li><a class="grey-text text-lighten-3" href="contact_us.php">Contact Us</a></li>
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

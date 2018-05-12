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
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		
		<!-- Jquery -->
		<script src="js/jquery.js"></script>
		
		<!-- Materialize CSS -->
		<link rel="stylesheet" href="css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="js/materialize.js"></script>
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
		<!-- Index CSS -->
		<link rel="stylesheet" href="css/index.css">

	</head>
	
	<body>
	
		<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="food_menu.php">Food Menu</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<?php include 'includes/user_nav_tab.php'?>
					</ul>
				</div>
			</nav>
		</header>
		
		<img class="responsive-img" src="img/home-background.jpg">
		
		<div class="row container center">
			<h1 class="center">Our Catering Service Provides</h1>
			<div class="col s4 features">
				<p class="center-align advantages">Natural Ingredient</p>
				<p class="center-align">Food made from natural ingredient. Ingredient that has little processing, flavoring, stabilizer and preservatives that keep food original nutrient.</p>
			</div>
			<div class="col s4 features">
				<p class="center-align advantages">Multiple choices</p>
				<p class="center-align">Choose from multiple choices of food that suit you and your attendents taste. Liven up the festival abit.</p>
			</div>
			<div class="col s4 features">
				<p class="center-align advantages">Fast Delivery</p>
				<p class="center-align">Fast delivery of food ensure that the food is warm and fresh upon arrival.</p>
			</div>
		</div>
		
		<div class="row container">
			
			<h1 class="center">Reviews from customers</h1>
			<div style="position: relative; left: 50%; top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
				<div class="col s3">
					<div class="card-panel">
						<div class="center">
							<img class="circle center" src="img/chrissy_costanza.jpg" style="width:50%; height:50%;">
							<h6 class="card-title">Crissy Costanza</h6>
						</div>
						<p>All of the food are fresh and delicious! All of my guest really loves the food here.</p>
					</div>
				</div>
				
				<div class="col s3">
					<div class="card-panel">
						<div class="center">
							<img class="circle center" src="img/anastasia_scheglova.jpg" style="width:50%; height:50%;">
							<h6 class="card-title">Anastasia Scheglova</h6>
						</div>
						<p>Offer multiple choices of good food which won't go unnoticed by the guests.</p>
					</div>
				</div>
				
				<div class="col s3">
					<div class="card-panel">
						<div class="center">
							<img class="circle center" src="img/susan_coffey.jpg" style="width:50%; height:50%;">
							<h6 class="card-title">Susan Coffey</h6>
						</div>
						<p>Good food with fast delivery time which ensure the food that came to your doorstep are piping hot!</p>
					</div>
				</div>
				
				<div class="col s3">
					<div class="card-panel">
						<div class="center">
							<img class="circle center" src="img/charlize_theron.jpg" style="width:50%; height:50%;">
							<h6 class="card-title">Charlize Theron</h6>
						</div>
						<p>Good food and good delivery service all around kuching area!</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" id="secure_shopping">
			<h1>Secure shopping</h1>
			
			<div class="col s4">
				<h3>SSL Encryption</h3>
				<p>Your purchases is protected by Secure Socket Layer 3 to avoid data phishing.</p>
			</div>
			
			<div class="col s4">
				<h3>Trusted chef</h3>
				<p>We only hire wide known and trusted chef to prepare our food to ensure that the food is top quality.</p>
			</div>
			
			<div class="col s4">
				<h3>24/7 Suppport</h3>
				<p>We're online 24 hours a day, 7 days a week to assist you with any inquiry you have.</p>
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
							<li><a class="grey-text text-lighten-3" href="contact_us.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
				&copy; 2018 Pinocone
				<a class="grey-text text-lighten-4 right" href="#">Pinocone</a>
				</div>
			</div>
		</footer>
	</body>
</html>
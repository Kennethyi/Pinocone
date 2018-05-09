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
		<title>Food Menu</title>
		<!-- Materialize CSS -->
		<link rel="stylesheet" href="css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="js/materialize.js"></script>
		
		<!-- AngularJS -->
		<script src="js/angular.js"></script>
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
		<!-- Masonry Grid Layout Lib -->
		<script src="js/masonry.js"></script>
		
		<!-- Food Menu CSS -->
		<link rel="stylesheet" href="css/food_menu.css">
		
		<!-- Food Package Data -->
		<script src="js/warm_food_menu.js"></script>
	</head>
	
	<body data-ng-app="food_menu">
		<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="./food_menu.php">Food Menu</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<?php include 'includes/user_nav_tab.php'?>"></a></li>
					</ul>
				</div>
				<div class="nav-wrapper z-depth-0 grey lighten-4">
					<div class="row">
						<a href="./index.php" id="first_breadcrumb" class="breadcrumb red-text text-darken-1">Home</a>
						<a href="./food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Food Menu</a>
						<a href="./warm_food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Warm Food Menu</a>
					</div>
				</div>
			</nav>
		</header>
		
		<div id="content" class="container">
		
			<div data-ng-controller="food_ctrl" class="row">
			
				<div data-ng-repeat="package in food_package" class="col s4">
					<div class="card large waves-effect waves-block waves-light">
						<div class="card-image">
							<img class="activator" src="img/food/warm/wamfd{{$index + 1}}.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator">Food Package {{$index + 1}}<i class="material-icons right">more_vert</i></span>
							<p>{{package.desc}}</p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Food Package {{$index + 1}}<i class="material-icons right">close</i></span>
							<p>{{package.info}}</p>
						</div>
						<div class="card-action">
							<a href="warm_food_buy_info.php?foodpackage='{{$index + 1}}'">BUY</a>
						</div>
					</div>
				</div>
				
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

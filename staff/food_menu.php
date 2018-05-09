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
		<link rel="stylesheet" href="../css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="../js/materialize.js"></script>
		
		<!-- AngularJS -->
		<script src="../js/angular.js"></script>
		
		<!-- JQuery -->
		<script src="../js/jquery.js"></script>
		
		<!-- Material icons -->
		<link href="../css/material-icon.css" rel="stylesheet">
		
		<!-- Food Menu CSS -->
		<link rel="stylesheet" href="../css/food_menu.css">
		
		<!-- Food Menu JS -->
		<script src="../js/food_menu.js"></script>
		
	</head>
	
	<body data-ng-app="food_menu">
	
		<div id="theloader">
			<div class="preloader-wrapper big active">
				<div class="spinner-layer spinner-red-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>

		<div data-ng-cloak id="wrapper">
			<header>
				<nav>
					<div class="nav-wrapper z-depth-3">
						<a href="staffindex.php" class="brand-logo">Pinocone</a>
						<ul id="nav" class="right">
							<li><a href="food_menu.php">Food Menu</a></li>
							<?php include '../includes/user_nav_tab.php'?>
						</ul>
					</div>
					<div class="nav-wrapper z-depth-0 grey lighten-4">
						<div class="row">
							<a href="staffindex.php" id="first_breadcrumb" class="breadcrumb red-text text-darken-1">Home</a>
							<a href="food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Food Menu</a>
						</div>
					</div>
				</nav>
			</header>
			
				<!--Food Category- Warm and Cold-->
			<a href="cold_food_menu.php">
				<img class="responsive-img" src="../img/food/cool.jpg"/>
			</a>
			<a href="warm_food_menu.php">
				<img class="responsive-img" src="../img/food/wam.jpg"/>
			</a>
                                

			
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
								<li><a class="grey-text text-lighten-3" href="../about_us.php">About Us</a></li>
								<li><a class="grey-text text-lighten-3" href="../contact_us.php">Contact</a></li>
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
			<!-- Food Package Data -->
			<script src="../js/food_package.js"></script>
		</div>
	</body>
</html>

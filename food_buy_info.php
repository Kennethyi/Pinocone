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
	if (!($foodpackage = $_GET['food-package'])) {
		header('location: food_menu.php');
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
		
		<!-- Food Buy CSS -->
		<link rel="stylesheet" href="css/food_buy.css">
		
		<!-- Food Package Data -->
		<script src="js/food_package.js"></script>
	</head>
	
	<body class="grey lighten-5" data-ng-app="food_menu">
		<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="./food_menu.php">Food Menu</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="<?php include 'includes/user_nav_tab.php'?>
					</ul>
				</div>
				<div class="nav-wrapper z-depth-0 grey lighten-4">
					<div class="row">
						<a href="./index.php" id="first_breadcrumb" class="breadcrumb red-text text-darken-1">Home</a>
						<a href="./food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Food Menu</a>
						<a href="#" class="breadcrumb red-text text-darken-1 red-darken-1">Food Package <?php echo str_replace("'", "", $foodpackage);?></a>
					</div>
				</div>
			</nav>
		</header>
		
			<div data-ng-controller="food_ctrl" id="content" class="container" style="margin-top: 82px;">
			
				<div id="parentcard" class="card-panel z-depth-3">
					<p id="cardtitle" class="row red lighten-1 center white-text">Food Package <?php echo str_replace("'", "", $foodpackage);?></p>
					
					<h5 class="outerh5">Your selection information</h5>
					
					<div id="preview" data-ng-init="counts=[0,1,2,3]" class="row">
						<div data-ng-repeat="loop in counts" class="col s3">
							<img src="img/food/food{{food_package[<?php echo $foodpackage;?> - 1].imgindex + $index}}.jpg"/>
						</div>
					</div>
					
					<blockquote>
					{{food_package[<?php echo $foodpackage;?> - 1].info}}
					</blockquote>
					
					<div id="pricecard" class="card-panel red lighten-1">
						<p class="white-text">{{food_package[<?php echo $foodpackage;?> - 1].price}}</p>
					</div>
					
					<div class="divider"></div>
					
					<h5 class="outerh5" >Your basic information</h5>
					
					<div id="parentpaymentform" class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s5">
									<input id="first_name" type="text" class="validate">
									<label for="first_name">First Name</label>
								</div>
								
								<div class="input-field col s5 offset-s1">
									<input id="last_name" type="text" class="validate">
									<label for="last_name">Last Name</label>
								</div>
							</div>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="email" type="email" class="validate">
									<label for="email">Email</label>
								</div>
							</div>
							
							<h5 id="innerh5">Your address details</h5>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="address1" type="text" class="validate">
									<label for="address1">Address Line 1</label>
								</div>
							</div>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="address2" type="text" class="validate">
									<label for="address2">Address Line 2</label>
								</div>
							</div>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="city" type="text" class="validate">
									<label for="city">City</label>
								</div>
							</div>
							
							<div class="row">
								<div class="input-field col s5">
									<input id="state" type="text" class="validate">
									<label for="state">State</label>
								</div>
								
								<div class="input-field col s5 offset-s1">
									<input id="postcode" type="number" class="validate">
									<label for="postcode">Postcode</label>
								</div>
							</div>
							
							<button class="btn-large waves-effect waves-light red lighten-1 white-text right" type="submit" name="action">Save
								<i class="material-icons right">save</i>
							</button>
							
							<button id="rstbtn" class="btn-large waves-effect waves-light red lighten-1 white-text right" type="reset">reset
								<i class="material-icons right">clear</i>
							</button>
							
							<button id="bckbtn" class="btn-large waves-effect waves-light red lighten-1 white-text left" onclick="window.history.go(-1); return false;" type="button">go back
								<i class="material-icons left">arrow_back</i>
							</button>
							
						</form>
					</div>
					
				</div>
				
			</div>

		<footer class="page-footer z-depth-3">
			<div class="container">
				<div class="row">
					<div class="col l6 s12 footer-h5">
						<h5 class="white-text">Pinocone</h5>
						<p class="grey-text text-lighten-4">Online Food Catering.</p>
					</div>
					<div class="col l4 offset-l2 s12 footer-h5">
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
				<a class="grey-text text-lighten-4 right" href="#!">Pinocone</a>
				</div>
			</div>
		</footer>
		
	</body>
</html>
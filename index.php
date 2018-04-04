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
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="css/materialize.css">

		<!-- Compiled and minified JavaScript -->
		<script src="js/materialize.js"></script>
		
		
		<link rel="stylesheet" href="css/index.css">
	</head>

	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">one</a></li>
		<li><a href="#!">two</a></li>
		<li class="divider"></li>
		<li><a href="#!">three</a></li>
	</ul>
	
	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo">Pinocone</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="sass.html">Food Menu</a></li>
				<li><a href="badges.html">About Us</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
	</nav>
	
	<body>
		<img class="responsive-img" src="img/home-background.jpg">
		
		<div class="row">
			<div class="col s4">
				<p class="center-align advantages">Natural Ingredient</p>
				<p class="center-align">Food made from natural ingredient. Ingredient that has little processing, flavoring, stabilizer and preservatives that keep food original nutrient.</p>
			</div>
			<div class="col s4">
				<p class="center-align advantages">Multiple choices</p>
				<p class="center-align">Choose from multiple choices of food that suit you and your attendents taste. Liven up the festival abit.</p>
			</div>
			<div class="col s4">
				<p class="center-align advantages">Fast Delivery</p>
				<p class="center-align">Fast delivery of food ensure that the food is warm and fresh upon arrival.</p>
			</div>
		</div>
		
		<div class="row">
		
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="img/chrissy_costanza.jpg" class="circle responsive-img">
						<span class="card-title">Crissy Costanza</span>
					</div>
					<div class="card-content">
						<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>
			
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="images/sample-1.jpg">
						<span class="card-title">Card Title</span>
					</div>
					<div class="card-content">
						<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>
			
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="images/sample-1.jpg">
						<span class="card-title">Card Title</span>
					</div>
					<div class="card-content">
						<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>
			
			
		</div>
		
	</body>

</html>
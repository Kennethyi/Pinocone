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
		
		<!-- AngularJS -->
		<script src="js/food_menu.js"></script>
		
		<!-- Material icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="stylesheet" href="css/food_menu.css">
	</head>
	
	<body data-ng-app="food_menu">
		<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="./food_menu.php">Food Menu</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
				<div class="nav-wrapper z-depth-0 grey lighten-4">
					<div class="row">
						<a href="./index.php" id="first_breadcrumb" class="breadcrumb red-text text-darken-1">Home</a>
						<a href="./food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Food Menu</a>
					</div>
				</div>
			</nav>
		</header>
		
		<div id="content" class="container">
		
			<div data-ng-controller="food_ctrl" class="row">
			
				<div data-ng-repeat="card in food_list" class="col s3">
					<a href="#">
						<div class="card small">
							<div class="card-image">
								<img src="img/food/food{{$index}}.jpg">
								<span class="col s12 card-title">{{card.food_name}}</span>
							</div>
							<div class="card-content">
								<p>{{card.desc}}</p>
							</div>
						</div>
					</a>
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
							<li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
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
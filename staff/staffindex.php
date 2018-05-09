<?php include('..\includes\server.php') ?>
<?php
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
		<script src="../js/jquery.js"></script>
		
		<!-- Materialize CSS -->
		<link rel="stylesheet" href="../css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="../js/materialize.js"></script>
		
		<!-- AngularJS -->
		<script src="../js/angular.js"></script>
		
		<!-- Search JS -->
		<script src="../js/search.js"></script>
		
		<!-- Material icons -->
		<link href="../css/material-icon.css" rel="stylesheet">
		
		<!-- Index CSS -->
		<link rel="stylesheet" href="../css/index.css">

	</head>
	
	<body data-ng-app="searchApp">
	
		<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="staffindex.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="food_menu.php">Food Menu</a></li>
						<?php include '..\includes\user_nav_tab.php'?>
					</ul>
				</div>
			</nav>
		</header>
		
		<div class="container" id="login_container" style="min-height: 60vh; margin-top:2%;">
			<div data-ng-controller="searchAppController">
			
			<h1>Admin Search Application</h1>
			
				<!-- Search Bar -->
				<div class="row">
					<div class="input-field col s12 ">
					<i class="material-icons prefix">search</i>
					<input type="text" data-ng-model="searchOrder" data-ng-keyup="change()" id="user"  placeholder="Search for #OrderID, or #Username" name="username"
					value="<?php if (isset($_POST["username"])) echo $_POST["username"]; ?>">
					</div>
				</div>
			
				<!-- Table -->
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Username</th>
								<th>OrderID</th>
								<th>Address</th>
								<th>Food Package</th>
								<th>Order Date</th>
							</tr>
						</thead>

						<tbody>
							<tr id="tooltipthis" data-ng-repeat="order in orders">
								<td>{{order.username}}</td>
								<td>{{order.orderid}}</td>
								<td>{{order.address}}</td>
								<td>{{order.foodpackage}}</td>
								<td>
									{{order.orderid | date:'yyyy-MM-dd HH:mm:ss Z'}}
									<a href="" data-ng-click="delete(order.orderid, $index)" class="right" style="color: unset;"><i class="material-icons">delete</i></a>
									<a href="#" class="right tooltipped" data-html="true" data-position="top" data-tooltip="Edit" style="color: unset;"><i class="material-icons">edit</i></a>
								</td>
							<tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<div class="right">
			<a href="food_menu.php" id="add-button" class="btn-floating btn-large tooltipped waves-effect waves-light red" data-html="true" data-position="left" data-tooltip="Add Orders" style="bottom: 80px; right: 24px;">
				<i class="material-icons">add</i>
			</a>
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
							<li><a class="grey-text text-lighten-3" href="../about_us.php">About Us</a></li>
							<li><a class="grey-text text-lighten-3" href="../contact_us.php">Contact</a></li>
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
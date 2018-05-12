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
	if (($food_package = $_GET['foodpackage']))
$_SESSION['foodpackage'] = $food_package;
        
       // if(!($food_package =$_GET['food-package']))
        //{header('location:warm_food_menu.php')}
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
		
		<!-- JQuery -->
		<script src="js/jquery.js"></script>
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
		<!-- Food Buy CSS -->
		<link rel="stylesheet" href="css/food_buy.css">
		
		<!-- Food Package Data -->
		<script src="js/warm_food_menu.js"></script>
		
	</head>
	
	<body class="grey lighten-5" data-ng-app="food_menu">
		<header>
			<nav>
				<div class="nav-wrapper z-depth-3">
					<a href="./index.php" class="brand-logo">Pinocone</a>
					<ul id="nav" class="right">
						<li><a href="./food_menu.php">Food Menu</a></li>
						<li><a href="about_us.php">About Us</a></li>
                        <?php include 'includes/user_nav_tab.php'?>
					</ul>
				</div>
				<div class="nav-wrapper z-depth-0 grey lighten-4">
					<div class="row">
						<a href="./index.php" id="first_breadcrumb" class="breadcrumb red-text text-darken-1">Home</a>
						<a href="./food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Food Menu</a>
                        <a href="./warm_food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Warm Food Menu</a>
						<a href="#" class="breadcrumb red-text text-darken-1 red-darken-1">Food Package <?php echo str_replace("'", "", $_SESSION['foodpackage']);?></a>
					</div>
				</div>
			</nav>
		</header>
		
			<div data-ng-controller="food_ctrl" id="content" class="container" style="margin-top: 82px;">
			
				<div id="parentcard" class="card-panel z-depth-3">
					<p id="cardtitle" class="row red lighten-1 center white-text">Food Package <?php echo str_replace("'", "", $_SESSION['foodpackage']);?></p>
					
					<h5 class="outerh5">Your selection information</h5>
					
					<div id="preview" data-ng-init="counts=[0,1,2,3]" class="row">
						<div data-ng-repeat="loop in counts" class="col s3">
							<img src="img/food/wamf{{food_package[<?php echo $_SESSION['foodpackage'];?> - 1].imgindex + $index}}.jpg"/>
						</div>
					</div>
					
					<blockquote>
					{{food_package[<?php echo $_SESSION['foodpackage'];?> - 1].info}}
					</blockquote>
					
					<div id="pricecard" class="card-panel red lighten-1">
						<p class="white-text">{{food_package[<?php echo $_SESSION['foodpackage'];?> - 1].price}}</p>
					</div>
					
					<div class="divider"></div>
					
					<div id="parentpaymentform" class="row">
						<form class="col s12">
							
							<h5 id="innerh5">Your address details</h5>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="address1" type="text" class="validate" name="address1" required="">
									<label for="address1">Address Line 1</label>
								</div>
							</div>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="address2" type="text" class="validate" name="address2" required="">
									<label for="address2">Address Line 2</label>
								</div>
							</div>
							
							<div  style="margin-left:0px; margin-right:0px;" class="row">
                                <div class="input-field col s5">
								<select id="city">
                                    <option value=""  selected>Please choose a city</option>
									<option value="Kuala Lumpur">Kuala Lumpur</option>
									<option value="Johor Bahru">Johor Bahru</option>
									<option value="George Town">George Town</option>
									<option value="Kuching">Kuching</option>
									<option value="Kota Kinabalu">Kota Kinabalu</option>
									<option value="Malacca City">Malacca City</option>
									<option value="Ipoh">Ipoh</option>
									<option value="Petaling Jaya">Petaling Jaya</option>
									<option value="Pahang">Pahang</option>
									<option value="Kuantan">Kuantan</option>
									<option value="Miri">Miri</option>
									<option value="Kuala Selangor">Kuala Selangor</option>
                                    <option value="Sibu">Sibu</option>
								</select>
								<label style="margin-left:-10px;" for="city">City</label>
		
							 </div>
                                
                                 <div class="input-field col s5 offset-s1">
								<select id="fpp">
                                    <option value=""  selected>Please choose a Food Packaging</option>
									<option value="Buffet style">Buffet style</option>
									<option value="Lunch Box style">Lunch Box style</option>
								</select>
                                    
								<label style="margin-left:-10px;" for="fpp">Food Packaging Prefrences</label>
							 </div>
                                
                            </div>
                            <div style="margin-left:0px; margin-right:0px;" class="row">
							<div class="input-field col s5">
								<select id="statee">
                                    <option value=""  selected>Please choose a state</option>
									<option value="Sabah">Sabah</option>
									<option value="Sarawak">Sarawak</option>
									<option value="Selangor">Selangor</option>
									<option value="Penang">Penang</option>
									<option value="Johor">Johor</option>
									<option value="Terengganu">Terengganu</option>
									<option value="Perak">Perak</option>
									<option value="Malacca">Malacca</option>
									<option value="Pahang">Pahang</option>
									<option value="Kelantan">Kelantan</option>
									<option value="Kedah">Kedah</option>
									<option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Perlis">Perlis</option>
								</select>
								<label style="margin-left:-10px;" for="statee">State</label>
							</div>
                              
								<div class="input-field col s5 offset-s1">
									<input id="postcode" type="number" class="validate" name="postcode" required="">
									<label for="postcode">Postcode</label>
								</div>
							</div>
							
							<button id="save_details" class="btn-large waves-effect waves-light red lighten-1 white-text right" type="submit">Save
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
			<!-- Credit Card Form Structure -->
			<div style="overflow:visible;" id="modal1" class="modal">
				<div id="modalbox" class="modal-content">
					<h4 class="center">Confirm Purchase</h4>
					<form id="creditcard" class="col s12">
						<div style="margin-left:0px; margin-right:0px;" class="row">
							<div class="input-field col s8">
								<label style="margin-left:-9px;" for="Owner">Owner</label>
								<input id="Owner" type="text" class="validate" name="Owner">
							</div>

							<div class="input-field col s1 offset-s1">
								<label style="margin-left:-9px;" for="CVV">CVV</label>
								<input id="CVV" type="text" class="validate" name="CVV">
							</div>
						</div>
						
						<div style="margin-left:0px; margin-right:0px;" class="row">
							<div class="input-field col s10">
								<label style="margin-left:-9px;" for="cardnum">Card Number</label>
								<input id="cardnum" type="text" class="validate" name="cardnum">
							</div>
						</div>
						
						<div style="margin-left:0px; margin-right:0px;" class="row">
							<div class="input-field col s1">
								<select id="month">
									<option value="01" selected>01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
								<label style="margin-left:-10px;" for="month">Month</label>
							</div>
							
							<div class="input-field col s1 offset-s1">
								<select id="year">
									<option value="2018" selected>2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
								</select>
								<label style="margin-left:-10px;" for="year">Year</label>
							</div>
							
							<div style="width:auto; margin-top:5px;" class="col s3 offset-s3">
								<img style="width:auto;" src="img/visa.jpg"/>
								<img style="width:auto;" src="img/mastercard.jpg"/>
								<img style="width:auto;" src="img/amex.jpg"/>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer center-align">
					<div class="center-align">
						<button id="save_order" style="width:95%;" class="modal-action modal-close btn waves-effect waves-light red lighten-1 white-text">Confirm
						</button>
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
		<!-- Food Buy Info JS -->
		<script src="js/food_buy_info.js"></script>
        

	</body>
</html>
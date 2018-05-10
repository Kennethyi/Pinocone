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
		
		<!-- JQuery -->
		<script src="js/jquery.js"></script>
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
	
		
		<!-- Subscrption Data -->
		<script src="js/subscribe.js"></script
	
	</head>
	<body class="grey lighten-5" data-ng-app="mem_reg">
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
						<a href="./profile.php" class="breadcrumb red-text text-darken-1 red-darken-1">Profile</a>
                        <a href="./subscribe.php" class="breadcrumb red-text text-darken-1 red-darken-1">Membership Subscription </a>
						
					</div>
				</div>
			</nav>
		</header>
		
			<div data-ng-controller="mem_ctrl" id="content" class="container" style="margin-top: 82px;">
			
				<div id="parentcard" class="card-panel z-depth-3">
					<p id="cardtitle" class="row red lighten-1 center white-text">Membership Registration </p>
					
            <h1>
					Why Join Our Membership?
					</h1>
            
             <table>
                   <tr>
                       <th>WHEN YOU ARE A MEMBER:</th>
                       <th>WHEN YOU ARE NOT A MEMBER:</th>
                   
                   </tr>
                   <tr>
                       <td>Experience unlimited promotions from time to  time. (e.g:  monthly  promotion).</td>
                       <td>Experience limited promotions.</td>
                   
                   </tr>
                   <tr>
                      <td>Enjoy 20% discount for each purchase.</td>
                       <td>Enjoy discount based on the sales season (e.g: year-end sale).</td>
                   
                   </tr>
                   <tr>
                   
                   <td>Receive free give for purchase cost higher than RM1000.00.</td>
                       <td>Receive no free gift.</td>
                   </tr>
                   <tr>
                   
                   <td>Receive an insurance benefits</td>
                       <td>Receive an insurance benefits</td>
                   </tr>
                   <tr>
                   
                   <td>Get 2% cashback for every purchase</td>
                       <td>No cashback is offered</td>
                   </tr>
                
                
                
                </table> 
            
					
					
					
					
					
					
					<div id="pricecard" class="card-panel red lighten-1">
						RM150 per month</p>
					</div>
					
					<div class="divider"></div>
					
					<h5 class="outerh5" >Your Subcription information</h5>
					
					<div id="parentpaymentform" class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s5">
									<input id="first_name" type="text" class="validate" name="first_name" required="">
									<label for="first_name">First Name</label>
								</div>
								
								<div class="input-field col s5 offset-s1">
									<input id="last_name" type="text" class="validate" name="last_name" required="">
									<label for="last_name">Last Name</label>
								</div>
							</div>
							
							
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="email" type="text" class="validate" name="email" required="">
									<label for="email">Email Address</label>
								</div>
							</div>
							
							<div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="password" type="text" class="validate" name="password" required="">
									<label for="password">Password</label>
								</div>
							</div>
                    
                          <div class="row">
								<div id="paymentform" class="input-field col s11">
									<input id="password1" type="text" class="validate" name="password1" required="">
									<label for="password1"> Reenter Password</label>
								</div>
							</div>
							
							
                            
							
							<button id="save_memberdetails" class="btn-large waves-effect waves-light red lighten-1 white-text right" type="submit">Save
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
						<button id="save_member" style="width:95%;" class="modal-action modal-close btn waves-effect waves-light red lighten-1 white-text">Confirm
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
		<script src="js/subscribesi.js"></script>

	</body>
</html>

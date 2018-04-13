<?php include('includes\server.php') ?>

<?php
if (isset($_POST['updateprofile'])) {
	$username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $phone_number= $_POST['phone_number'];
    $address = $_POST['address'];
	
	$update = "UPDATE user SET username = '$username', 
                first_name= '$first_name', 
                last_name= '$last_name', 
                email = '$email', 
                password='$password', 
                phone_number='$phone_number', 
                address= '$address' WHERE user_id = 1";
    
	$result = mysqli_query($db, $update);
	if ($result) {
		header('Location: profile.php');
	}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<title>Edit Profile</title>
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
		
		<!-- Profile CSS  -->
		<link rel="stylesheet" href="css/profile.css">
	</head>
    
    <body>
        <nav>
		  <div class="nav-wrapper z-depth-3">
          <a href="index.php" class="brand-logo">Pinocone</a>
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
                            <a href="./editprofile.php" class="breadcrumb red-text text-darken-1 red-darken-1">Edit Profile</a>
						</div>
					</div>
				</nav>
		  </div>
              
        </nav>
            <br>
            <div class="container" id="profile_container">
                 <div class="card-panel">
                     <h1>Edit Profile</h1>
                   <form  class="col s12" method="post" action="editprofile.php" id="profileform">
                  <?php include('includes\errors.php'); ?>
				    <div class="row">
                        <div class="input-field col s12">
					       <input id="username" type="text"  name="username" class="validate">
					       <label for="username">Username</label>
                        </div>
                    </div>

            <div class="row">
                    <div class="input-field col s6">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" class="validate" name="first_name" class="validate">  
                    </div>

                    <div class="input-field col s6">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" type="text"  name="last_name" class="validate">
                    </div>
            </div>    
				
			<div class="row">
                        <div class="input-field col s12">
                           <label for="email">Email</label>
					       <input id="email" type="email"  name="email" class="validate">
					      
                        </div>
            </div>
                       
            <div class="row">
                        <div class="input-field col s12">
                           <label for="password">Password</label>
					       <input id="password" type="text"  name="password" class="validate">
					      
                        </div>
            </div>
                       
            <div class="row">
                        <div class="input-field col s12">
                           <label for="phonenum">Phone Number</label>
					       <input id="phonenum" type="text"  name="phone_number" class="validate">
					      
                        </div>
            </div>
                       
             <div class="row">
                        <div class="input-field col s12">
                           <label for="addr">Address</label>
					       <input id="addr" type="text"  name="address" class="validate">
					      
                        </div>
            </div>
                       
                  <button class="btn waves-effect waves-light red lighten-1" type="submit" name="updateprofile">Confirm</button>     
		          </form>

                </div>
            </div>
		  <br>
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
					<a class="grey-text text-lighten-4 right" href="#!">Pinocone</a>
					</div>
				</div>
			</footer>
	</body>
</html>
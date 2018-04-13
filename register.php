<?php include('includes\server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        
        <title>Register</title>
		
		<!-- Materialize CSS -->
		<link rel="stylesheet" href="css/materialize.css">

		<!-- Materialize JavaScript -->
		<script src="js/materialize.js"></script>
		
		<!-- AngularJS -->
		<script src="js/angular.js"></script>
		
		<!-- AngularJS -->
		<script src="js/food_menu.js"></script>
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
        <!-- Login CSS  -->
		<link rel="stylesheet" href="css/login.css">
    </head>
    
    <body>
        <nav>
		  <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Pinocone</a>
		  </div>
        </nav>
        <br/>
        <div class="container" id="login_container">
        <div class="card-panel">
        <div class="row">
        <form class="col s12" method="post" action="register.php">
            
            <?php include('includes\errors.php'); ?>

            <div class="row">
                <div class="input-field col s12">
					<input id="username" type="text" class="validate" name="username">
					<label for="username">Username</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" class="validate" name="first_name">  
                </div>

                <div class="input-field col s6">
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" class="validate" name="last_name">
                </div>
            </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" class="validate" name="password_1">
              <label for="password">Password</label>
            </div>

            <div class="input-field col s6">
              <input id="rpassword" type="password" class="validate" name="password_2">
              <label for="rpassword">Retype Password</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s7">
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Email</label>
            </div>

            <div class="input-field col s5">
              <input id="phnum" type="text" class="validate" name="phnum">
              <label for="phnum">Phone number</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <label for="add">Address</label>
              <input id="add" type="text" class="validate" name="address">

            </div>
          </div>

        
            <a href="login.php"><p class="red-text text-lighten-1">Already a member?</p></a>
         
            <button class="btn waves-effect waves-light red lighten-1" type="submit" name="reg_user">Register</button>
            
    </form>
        
    </div>
    </div>
    </div>
        
        <footer class="page-footer z-depth-3" id="footer_login">
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
<?php include('includes\server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
		
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
		
        <!-- Login CSS  -->
		<link rel="stylesheet" href="css/login.css">
    </head>
    
    <body>
        
       
        <nav>
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo">Pinocone</a>
			</div>
        </nav>

        <div class="container" id="login_container">
        <div class="card-panel">
            
            <form class="col s12" method="post" action="login.php">
                
           <?php include('includes\errors.php'); ?>
                
            <div class="row">
                <div class="input-field col s12 ">
                <label for="user" class="word">Username</label>
                <input type="text" id="user"  placeholder="Enter Username" name="username"
                value="<?php if (isset($_POST["username"])) echo $_POST["username"]; ?>">
                </div>
            </div>
            
            <div class="row">
            <div class="input-field col s12">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Enter Password" name="password"
              value="<?php if (isset($_POST["password"])) echo $_POST["password"]; ?>">
    
            </div>
            </div> 
    
                <button class="btn waves-effect waves-light red lighten-1" type="submit" name="login_user">Log in</button>
                
                <button class="btn waves-effect waves-light red lighten-1" type="button" onclick="location.href='register.php';" value="Go to Register">Sign Up</button>
            </form>
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
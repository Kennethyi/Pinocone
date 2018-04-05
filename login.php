<?php include('includes\server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Login page" />
        <meta name="keywords" content="HTML, log,in, Development project 2," />

        <title>Login</title>
		
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
		
		<link rel="stylesheet" href="css/index.css">
    </head>
    
    <body>
        
       
        <nav>
		  <div class="nav-wrapper z-depth-3">
          <a href="index.php" class="brand-logo">Pinocone</a>
		  </div>
        </nav>
        
        
		<br />
        <br />
		<br />
		
        <div class="container" id="login_container">
        <div class="card-panel">
            
            <form class="col s12" method="post" action="login.php">
                
            <?php include('includes\errors.php'); ?>
                
            <div class="row">
                <div class="input-field col s12">
                <label for="user">Username</label>
                <input type="text" id="user"  placeholder="Enter Username" name="username">
                </div>
            </div>
            
            <div class="row">
            <div class="input-field col s12">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Enter Password" name="password">
    
            </div>
            </div> 
    
                <button class="btn waves-effect waves-light #ffd600 yellow accent-4 text-black" type="submit" name="login_user"><font color="black">Log in </font>
				</button>
                
                <button class="btn waves-effect waves-light #ffd600 yellow accent-4" type="button" onclick="location.href='register.php';" value="Go to Register"><font color="black">Sign Up </font>
                </button>
            </form>
        </div>
        </div>
		
		<br />
		<br />
		<br />
		
        
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
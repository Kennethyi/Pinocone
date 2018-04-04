<?php include('includes\server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Login page" />
        <meta name="keywords" content="HTML, log,in, Development project 2," />
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<script src="js/materialize.js"></script>
        <script src="js/materialize.min.js"></script>
        <title>Login</title>
    </head>
    
    <body>
        
        <header>
        <nav>
		  <div class="nav-wrapper z-depth-3 #ec407a pink lighten-1">
          <a href="#" class="brand-logo">Pinocone</a>
		  </div>
        </nav>
        </header>
        </br>
        
        <div class="container">
        
        <div class="card-panel">
            
            <form method="post" action="login.php">
                
            <?php include('includes\errors.php'); ?>
                
            <p class="user">Username:
                <input type="text" id="uname" placeholder="Enter Username" name="username">
            </p>
            
             <p class="user">Password:
                <input type="password" id="psw" placeholder="Enter Password" name="password">
            </p>
            
             <!--<input type="submit" name="submit" value="Login">-->
                <button class="btn waves-effect waves-light #ffd600 yellow accent-4 text-black" type="submit" name="login_user"><font color="black">Sign in </font>
				</button>
                
                <button class="btn waves-effect waves-light #ffd600 yellow accent-4" type="button" onclick="location.href='register.php';" value="Go to Register"><font color="black">Sign Up </font>
                </button>
            </form>
        </div>
        </div> 
    <footer class="page-footer z-depth-3 #ec407a pink lighten-1 ">
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
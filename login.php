<?php include('includes\server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Login page" />
        <meta name="keywords" content="HTML, log,in, Development project 2," />
        <meta name="author" content="Kenneth"/>
        <link rel="stylesheet" href="css/login.css"/>
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<script src="js/materialize.js"></script>
        <script src="js/materialize.min.js"></script>
        <title>Login</title>
    </head>
    
    <body>
        <nav>
		  <div class="nav-wrapper">
          <a href="#" class="brand-logo">Pinocone</a>
		  </div>
        </nav>
        <br/>
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
                <button class="btn waves-effect waves-light" type="submit" name="login_user">Sign in 
                </button>
                
                <button class="btn waves-effect waves-light" type="button" onclick="location.href='register.php';" value="Go to Register">Sign Up 
                </button>
            </form>

         </div>
        </div>
    </body>
</html>
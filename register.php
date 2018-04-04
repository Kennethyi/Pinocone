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
        <div class="row">
        <form class="col s12" method="post" action="register.php">
            
            <?php include('includes\errors.php'); ?>

            <div class="row">
                <div class="input-field col s12">
                <label for="username">Username</label>
                <input id="username" type="text" class="validate" name="username">
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
              <input id="phnum" type="number" class="validate" name="phnum">
              <label for="phnum">Phone number</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <label for="add">Address</label>
              <input id="add" type="text" class="validate" name="address">

            </div>
          </div>

        
            <p><a href="login.php">Already a member?</a></p>
         
            <button class="btn waves-effect waves-light" type="submit" name="reg_user">
             Register
            </button>
            
    </form>
        
    </div>
    </div>
    </div>
    </body>
</html>
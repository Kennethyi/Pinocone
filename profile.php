<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'pinocone');

$cuser = $_SESSION['username'];
    //USER QUERY FOR GETTING USER LOGIN INFORMATION FOR PROFILE DIAPLAY
    $sql = "SELECT * FROM user WHERE username = '" . $_SESSION['username'] . "'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $billsql = "Select * FROM orders WHERE username = '" . $_SESSION['username'] . "'";
    $billresult = mysqli_query($db, $billsql);
   // $billrow = mysqli_fetch_array($billresult,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<title>Profile</title>
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
		
		<!-- Material icons -->
		<link href="css/material-icon.css" rel="stylesheet">
		
		<!-- Profile CSS -->
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
							<a href="./food_menu.php" class="breadcrumb red-text text-darken-1 red-darken-1">Profile</a>
						</div>
					</div>
				</nav>
                   
            <div class="container" id="profile_container">
                 <div class="card-panel">
                    <div class="row">
                    <div class="showfield col s12" id="profileusername">
                     Username:
                     <?php
                       if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }
			         ?>
                    </div>
                     </div>
                     
                    <div class="row">
                    <div class="showfield col s6" id="profilefname">
                    First name:
                     <?php
                        if(isset($_SESSION['username'])){
                            
                            echo $row['first_name'];
                        }
			         ?>
                    </div>
                    
                    <div class="showfield col s6" id="profilelname">
                    Last name:
                     <?php
                        echo $row['last_name'];

			         ?>
                    </div>
                     </div>
                     
                     <div class="row">
                    <div class="showfield col s12" id="profileuseremail">
                    Email:
                     <?php
                        echo $row['email'];

			         ?>
                    </div>
                     </div>
                     
                     <div class="row">
                    <div class="showfield col s12" id="profileuserphone">
                     Phone number:
                     <?php
                        echo $row['phone_number'];

			         ?>
                    </div>
                     </div>
                     
                    <div class="row">
                    <div class="showfield col s12" id="profileuseraddress">
                     User Address:
                     <?php
                        echo $row['address'];

			         ?>
                    </div>
                     </div>
                     
                      <button class="btn waves-effect waves-light red lighten-1" type="submit" name="editp" onclick="location.href='editprofile.php';"> Edit Profile</button>

                </div>
                  
                <div class="card-panel">
                   <h2>View Order History</h2>
                    <?php
                        echo "<div class='table-responsive'>";
                            echo "<table class='table'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Address</th>";
                                        echo "<th>Food Package</th>";
                                        echo "<th>Order ID</th>";
                                    echo "</tr>";
                                echo "</thead>";
                  
                                echo "<tbody>";
                                    if($billresult-> num_rows>0)
                                        {
                                           while($billrow=$billresult->fetch_assoc()){
                                              echo "<tr>";
                                                echo "<td>" .$billrow['address1']. ", " .$billrow['address2']. ", " 
												.$billrow['city']. ", " .$billrow['postcode']."</td>";
                                                echo "<td>" .$billrow['foodpackage']. "</td>";
                                                echo "<td>" .$billrow['orderid']. "</td>";
                                                echo "</tr>"; 
                                           }
                                        }
                                echo "</tbody>";
                  
                            echo "</table>";
                        echo "</div>";
                        
                    ?>
                </div>
            </div>
		
		<footer class="page-footer z-depth-3" id="profile_footer">
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
                 
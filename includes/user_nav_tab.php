<?php 
if(isset($_SESSION['username']))
	if($_SESSION['username'] == "admin")
		echo '#" onClick="alert(\'Admin is a default profile!\')"><i class="material-icons left">account_circle</i>' . $_SESSION['username'] . '</a></li><li><a href="../logout.php">Logout</a></li>';
	else
		echo 'profile.php"><i class="material-icons left">account_circle</i>' . $_SESSION['username'] . '</a></li><li><a href="logout.php">Logout</a></li>';
if(empty($_SESSION['username']))
		echo 'login.php">Login' . '</a></li>';
?>
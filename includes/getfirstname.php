<?php
	include '..\includes\server.php';
	
	$query = "SELECT first_name from user WHERE username=username";
	$result = mysqli_query($db, $query);
	
	$firstname = mysqli_fetch_array($result);
	
	echo $firstname[0];
?>
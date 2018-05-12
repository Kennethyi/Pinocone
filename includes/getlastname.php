<?php
	include '..\includes\server.php';
	
	$query = "SELECT last_name from user WHERE username=username";
	$result = mysqli_query($db, $query);
	
	$lastname = mysqli_fetch_array($result);
	
	echo $lastname[0];
?>
<?php
	include '..\includes\server.php';
	
	$orderid = $_GET['id'];
	
	$delete = "DELETE * from orders WHERE orderid='$orderid'";
	$results = mysqli_query($db, $query);
?>
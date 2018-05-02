<?php
	include '..\includes\server.php';
	
	$data = json_decode(file_get_contents("php://input"));
	
	$search_orderid = $data->searchOrder;
	$search_username = $data->searchOrder;
	
	$query = "SELECT * from orders WHERE orderid='$search_orderid'";
	$results = mysqli_query($db, $query);
	
	if (mysqli_num_rows($results) < 1) {
		$query = "SELECT * from orders WHERE username='$search_username'";
		$results = mysqli_query($db, $query);
	}
	
	$data = array();
	
	while ($row = mysqli_fetch_array($results)) {
		$data[] = array(
			"username" => $row['username'],
			"orderid" => $row['orderid'],
			"address" => $row['address1'] . ", " . $row['address2'] . ", " . $row['statee'] . ", " . $row['postcode'],
			"foodpackage" => $row['foodpackage']
		);
	}
	
	echo json_encode($data);
?>
<?php
	header("Access-Control-Allow-Origin: *");
	$conn = new mysqli("localhost", "root", "", "pinocone");
	$result = $conn->query("SELECT * FROM food_menu");
	
	$outp = "";
	while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		if ($outp != "") {$outp .= ",";}
		$outp .= '{"food_name":"'	. $rs["food_name"]		. '",';
		$outp .= '"desc":"'			. $rs["description"]	. '"}';
	}
	$outp = '{"food_list":['.$outp.']}';
	$conn->close();
	
	echo($outp);
?>
<?php
	header("Access-Control-Allow-Origin: *");
	$conn = new mysqli("localhost", "root", "", "pinocone");
	$result = $conn->query("SELECT * FROM food_package");
	
	$outp = "";
	while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		if ($outp != "") {$outp .= ",";}
		$outp .= '{"food_package":"'	. $rs["food_package"]		. '",';
		$outp .= '"desc":"'				. $rs["description"]		. '",';
		$outp .= '"info":"'				. $rs["info"]				. '",';
		$outp .= '"price":"'			. $rs["price"]				. '",';
		$outp .= '"imgindex":'			. $rs["imgindex"]			. '}';
	}
	$outp = '{"food_package":['.$outp.']}';
	$conn->close();
	
	echo($outp);
?>
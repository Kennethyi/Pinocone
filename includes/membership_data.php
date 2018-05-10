<?php
	header("Access-Control-Allow-Origin: *");
	$conn = new mysqli("localhost", "root", "", "pinocone");
	$result = $conn->query("SELECT * FROM user");
	
	$outp = "";
	while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		if ($outp != "") {$outp .= ",";}
		$outp .= '{"username":"'	. $rs["username"]		. '",';
		$outp .= '"first_name":"'				. $rs["first_name"]		. '",';
		$outp .= '"last_name":"'				. $rs["last_name"]				. '",';
		$outp .= '"email":"'			. $rs["email"]				. '",';
		$outp .= '"password":'			. $rs["password"]			. '}';
        $outp .= '"phone_number":'			. $rs["phone_number"]			. '}';
        $outp .= '"address":'			. $rs["address"]			. '}';
        $outp .= '"Member":'			. $rs["Member"]			. '}';
	}
	$outp = '{"Member":['.$outp.']}';
	$conn->close();
	
	echo($outp);
?>
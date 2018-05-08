<?php 

	// variable declaration
	$username = "";
    $first_name = "";
    $last_name = "";
	$address1 = "";
	$address2 = "";
	$city = "";
	$statee = "";
	$postcode = "";
	$foodpackage = "";
	$orderid = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'pinocone');

	// REGISTER USER
	if (isset($_REQUEST)) {
		// receive all input values from the form
		$username = 	mysqli_real_escape_string($db, $_POST['username']);
        $first_name = 	mysqli_real_escape_string($db, $_POST['first_name']);
        $last_name = 	mysqli_real_escape_string($db, $_POST['last_name']);
        $address1 = 	mysqli_real_escape_string($db, $_POST['address1']);
		$address2 = 	mysqli_real_escape_string($db, $_POST['address2']);
		$city = 		mysqli_real_escape_string($db, $_POST['city']);
		$statee = 		mysqli_real_escape_string($db, $_POST['statee']);
		$postcode = 	intval(mysqli_real_escape_string($db, $_POST['postcode']));
		$foodpackage = 	mysqli_real_escape_string($db, $_POST['foodpackage']);
		$orderid = 		mysqli_real_escape_string($db, $_POST['orderid']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) 		{ array_push($errors, "Username is required"); }
		if (empty($first_name)) 	{ array_push($errors, "First Name is required"); }
		if (empty($last_name)) 		{ array_push($errors, "Last Name is required"); }
		if (empty($address1)) 		{ array_push($errors, "Address 1 is required"); }
		if (empty($city)) 			{ array_push($errors, "City is required"); }
		if (empty($statee)) 		{ array_push($errors, "statee is required"); }
		if (empty($postcode)) 		{ array_push($errors, "Postcode is required"); }
		if (empty($foodpackage)) 	{ array_push($errors, "Food Package is required"); }
		if (empty($orderid)) 		{ array_push($errors, "Order ID is required"); }
                    

        
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO orders (username, first_name, last_name, address1, address2, city, statee, postcode, foodpackage, orderid) 
					  VALUES('$username', '$first_name', '$last_name', '$address1', '$address2', '$city', '$statee', '$postcode' , '$foodpackage', '$orderid')";
			mysqli_query($db, $query);
            
            $usersql = "SELECT * FROM user WHERE username = '$username'";
            $usersqlresult = mysqli_query($db, $usersql);
            $usersqlrow = mysqli_fetch_array($usersqlresult,MYSQLI_ASSOC);
            $to = $usersqlrow["email"];

            $message =
            "Thank you for your purchase! $username\n
            First name: $first_name\n
            Last name: $last_name\n
            Address 1: $address1\n
            Address 2: $address2\n
            City: $city\n
            State: $statee\n
            Post Code: $postcode"
            ;

            mail($to,"Pinocone Purchase Details",$message);
		}
		else
			echo "Error 0" + $errors;
	}
	else
		echo "Error 1";
?>
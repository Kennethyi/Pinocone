<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
    $first_name = "";
    $last_name = "";
    $phnum = "";
    $address = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'pinocone');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
        $phnum = mysqli_real_escape_string($db, $_POST['phnum']);
        $address = mysqli_real_escape_string($db, $_POST['address']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
        
        // form validation: check if username input already exists in database
        $chkusernamequery = "SELECT * FROM user WHERE username='$username'";
        $resultusernamequery = mysqli_query($db, $chkusernamequery);
        if (mysqli_num_rows($resultusernamequery) == 1) {
				array_push($errors, "Username already exists, please input different username");
        }
        
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (username, first_name, last_name, email, password, phone_number, address) 
					  VALUES('$username', '$first_name', '$last_name', '$email', '$password', '$phnum', '$address')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			if ($username == "admin" && $password == md5("admin") ){
				$_SESSION['username'] = $username;
				header('location: staff\staffindex.php');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

    //UPDATE PROFILE
    if (isset($_POST['updateprofile'])) {
	// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
        $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($db,
        $_POST['last_name']);
	    $email =mysqli_real_escape_string($db, 
        $_POST['email']);
	    $password = mysqli_real_escape_string($db, $_POST['password']);
        $phone_number= mysqli_real_escape_string($db, $_POST['phone_number']);
        $address = mysqli_real_escape_string($db,
        $_POST['address']);
        
        // form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($first_name)&&($last_name)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
        if (empty($phone_number)) { array_push($errors, "Phone Number is required"); }



		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			
            $update = "UPDATE user SET username = '$username', 
                first_name= '$first_name', 
                last_name= '$last_name', 
                email = '$email', 
                password='$password', 
                phone_number='$phone_number', 
                address= '$address' WHERE user_id = 1";
			
            $result = mysqli_query($db, $update);
            if ($result) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are have edit your profile";
			header('location: profile.php');
            }
		}
    }
?>
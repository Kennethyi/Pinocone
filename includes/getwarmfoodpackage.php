<?php
	session_start();
	echo str_replace("'", "", $_SESSION['warm_food_menu']);
?>
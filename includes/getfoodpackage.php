<?php
	session_start();
	echo str_replace("'", "", $_SESSION['food-package']);
?>
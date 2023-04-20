<?php
	$connect = new mysqli("localHost", "root", "", "food_system_db");
	
	if($connect->connect_errno) {
		die('Could not connect: ' . $connect->connect_errno);
	}
?>
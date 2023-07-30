<?php

	// $servername = 'localhost';
	$servername = '127.0.0.1:5501';
	$username = 'root';
	$password = '';
	$database = 'plant_db';

	// Creating database connection

	$conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "INSERT INTO `admins` (`admin name`, `password`) VALUES (\'sid123\', \'123\');";
	// Check connection

	if (!$conn) {
		die("Failed to Connect" . mysqli_connect_error());
	}
	else {
		echo "Connection Successful";	
	}
    $sql = "SELECT * FROM `admins`;";
	
	if(mysqli_query($conn, $sql)){
		echo "SUCCESS";
	}
	else{
		echo "error" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
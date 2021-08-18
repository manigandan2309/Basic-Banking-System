<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "project_bank";
	
	$conn = mysqli_connect($server, $username, $password, $database);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
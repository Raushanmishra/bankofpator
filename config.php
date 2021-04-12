<?php

	$servername = "localhost";
	$username = "id16587787_raushanbank60";
	$password = "Ykomishra9060173800@";
	$dbname = "id16587787_raushanbannk60";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
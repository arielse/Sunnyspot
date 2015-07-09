<?php
function connectToDatabase($host, $user, $password, $database) {
	$link = mysqli_connect($host, $user, $password, $database);
	
	if(!$link) {
		exit("Connection error: ". mysqli_connect_error());
	}

	return $link;
}

$myserver = $_SERVER['HTTP_HOST'];

if ($myserver == "sunnyspot.dev") {
	$databaseServer = "localhost";
	$user = "root";
	$password = "ariel";
	$database = "sunnySpotIndigo12";
} else {
	$databaseServer = "localhost";
	$user = "indigo12";
	$password = "swan96";
	$database ="sunnySpotIndigo12";
}


$link = connectToDatabase($databaseServer, $user, $password, $database);
?>
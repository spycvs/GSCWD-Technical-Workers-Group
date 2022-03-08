<?php

	//db info needed to connect
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tech";

	/* Attempt to connect to MySQL database */
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>



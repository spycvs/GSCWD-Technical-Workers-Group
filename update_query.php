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


 
if(ISSET($_POST['update'])){
		$pid = $_POST['pid'];
		$p_title = $_POST['p_title'];
		$p_location = $_POST['p_location'];
		$p_budget = $_POST['p_budget'];
		
 
		mysqli_query($link, "UPDATE `projects` SET `p_title` = '$p_title', `p_location` = '$p_location', `p_budget` = '$p_budget' WHERE `pid` = '$pid'") or die(mysqli_error());
 
		header("location: project.php");
	}
?>
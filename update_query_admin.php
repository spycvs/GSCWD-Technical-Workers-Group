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
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
		$type = $_POST['type'];
		//$image1 = $_FILES['image1']['name'];
		//$target = "uploads/".basename($image1);

		//move_uploaded_file($_FILES['image']['tmp_name'] , $target);
		
 
		mysqli_query($link, "UPDATE `users` SET `username` = '$username', `password` = '$password', `fname` = '$fname', `lname` = '$lname', `type` = '$type' WHERE `id` = '$id'") or die(mysqli_error());
		
	
	
		//	move_uploaded_file($_FILES['image']['tmp_name'], $target)
	header("location: manageadmin.php");
		
	}
?>
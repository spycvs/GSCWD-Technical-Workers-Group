<?php
  $db = mysqli_connect("localhost", "root", "", "tech");
 
  $msg = "";
  if (isset($_POST['upload'])) {
      $id = $_SESSION['id'];
  	$image = $_FILES['image']['name'];
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$target = "uploads/".basename($image);
 
  	$sql = "INSERT INTO users (image WHERE p_id=$id) VALUES ('$image')";
  	mysqli_query($db, $sql);
 
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  	$msg = "Image uploaded successfully";
  	}else{
  	$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM users");
?>
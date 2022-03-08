<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');

$msg = "";
if(isset($_POST['insert']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $type = $_POST['type'];
    $image = $_FILES['image']['name'];
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$target = "uploads/".basename($image);


    $query = "INSERT INTO users (`username`,`password`,`fname`,`lname`,`type`,image) VALUES
     ('$username','$password','$fname','$lname','$type','$image')";
    mysqli_query($connection, $query);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
      echo '<script> alert("Data Saved"); </script>';
      header('Location: manageadmin.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

$result = mysqli_query($db, "SELECT * FROM users");

?>
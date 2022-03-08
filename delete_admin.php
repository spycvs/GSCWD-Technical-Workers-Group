<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:manageadmin.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>


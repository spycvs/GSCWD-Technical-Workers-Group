<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');

if(isset($_POST['delete']))
{
    $p_id = $_POST['p_id'];

    $query = "DELETE FROM bidevaluation WHERE p_id='$p_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:home.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>


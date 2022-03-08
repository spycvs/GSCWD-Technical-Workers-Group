<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');

if(isset($_POST['insert']))
{
    $pid = $_POST['pid'];
    $p_title = $_POST['p_title'];
    $p_location = $_POST['p_location'];
    $p_budget = $_POST['p_budget'];


    $query = "INSERT INTO projects (`pid`,`p_title`,`p_location`,`p_budget`) VALUES
     ('$pid','$p_title','$p_location','$p_budget')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: project.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
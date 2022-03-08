<?php
//database_connection.php

$connect = new PDO('mysql:host=localhost;dbname=tech', 'root', '');

if(!isset($_SESSION)){ 
    session_start();
}
?>
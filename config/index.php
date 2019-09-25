<?php 
$server = "127.0.0.1:3306/"; 
$user = "root"; 
$password = ""; 
$database = "bidbynj"; 
$db = mysqli_connect($server, $user, $password, $database); 

$site_name = "Nakhre BID";

if (!$db)
    die('Not connected : ' . mysqli_error());
session_start();
?>
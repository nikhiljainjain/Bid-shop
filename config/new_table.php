<?php 
 
$server = "127.0.0.1:3306/"; 
$user = "root"; 
$password = ""; 
$database = "bidbynj"; 
$db = mysqli_connect($server, $user, $password); 

$site_name = "Nakhre BID";

if (!$db)
    die('Not connected : ' . mysqli_error());

$query = "CREATE DATABASE IF NOT EXISTS ". $database .";"; 
$result = mysqli_query($db, $query); 

if ($result != 1)
    die('Something happening wrong '. mysqli_error());

$db_selected = mysqli_select_db( $db, $database);
//echo " Database created successfully";

$query = "CREATE TABLE IF NOT EXISTS USER (USERNAME VARCHAR(26) NOT NULL UNIQUE, NAME VARCHAR(26) NOT NULL, PASSWORD VARCHAR(26) NOT NULL, PRIMARY KEY (USERNAME)); ";

if (!mysqli_query($db, $query)) 
    die("Error creating table ". mysqli_error($db));

$query = "CREATE TABLE IF NOT EXISTS ITEMS (ITEMID INT NOT NULL  AUTO_INCREMENT, PNAME VARCHAR(26) NOT NULL, PPRICE INT NOT NULL, PDESCP VARCHAR(100) NOT NULL, OWNER VARCHAR(26) NOT NULL, EXIT_TIME DATE, PRIMARY KEY (ITEMID), FOREIGN KEY (OWNER) REFERENCES USER(USERNAME)); ";

if (!mysqli_query($db, $query)) 
    die("Error creating table ". mysqli_error($db));

$query = "CREATE TABLE IF NOT EXISTS BID (ITEMID INT, USER VARCHAR(26) NOT NULL, BPRICE INT NOT NULL, ADD_TIME DATE, FOREIGN KEY (ITEMID) REFERENCES ITEMS(ITEMID), FOREIGN KEY (USER) REFERENCES USER(USERNAME));";

if (!mysqli_query($db, $query)) 
    die("Error creating table ". mysqli_error($db));
session_start();
?>
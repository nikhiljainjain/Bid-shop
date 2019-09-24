<?php
session_start();

if (!isset($_COOKIE["username"])){
    header("Location:../cred/index.php");
}

echo "Welcome to the site";
?>


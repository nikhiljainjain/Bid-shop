<?php
    define("DB_HOST", 'localhost:3306/');
    define("DB_USERNAME",'unknown');
    define("DB_PASSWORD", 'toor');
    define("DB_DATABASE", 'bidbynj');
    $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>


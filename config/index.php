<?php
    $db_SERVER = "localhost:3306/";           // $_ENV['SERVER'];
    $db_USERNAME = "root";              //$_ENV["USERNAME"];
    $db_PASSWORD = "";    //$_ENV["PASSWORD"];
    $db_DATABASE = "BIDBYNJ";           //$_ENV["DATABASE"];
    $db = mysqli_connect($db_SERVER, $db_USERNAME, $db_PASSWORD);//, $db_DATABASE);

    // Check connection
    if (mysqli_connect_error()) {
        //die("Database connection failed: " . mysqli_connect_error());
    }

    echo $db . "<br>Connection is established with mysql db<br>";
?>


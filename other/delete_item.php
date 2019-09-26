<?php

include("../config/index.php");
if (!isset($_COOKIE["username"]))
    header("Location:../cred/index.php");

$id = $_GET["id"];
if (!empty($id)){
    $query = "DELETE FROM BID WHERE ITEMID=$id";
    echo $query;
    if(mysqli_query($db, $query)){
        $query = "DELETE FROM ITEMS WHERE ITEMID=$id";
        echo $query;
        if(mysqli_query($db, $query)){
            echo "Data Deleted successfully";
        }
    }
}

header("Location: acquired_bid.php");
?>
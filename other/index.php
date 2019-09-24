<?php
include("./partition/header.php");

session_start();

if (!isset($_COOKIE["username"])){
    header("Location:../cred/index.php");
}

$query = "SELECT * FROM ITEMS";
$result = mysqli_query($db, $query);
?>

<?php 
if (mysqli_num_rows($result) == 0)
    echo "<div class=\"alert alert-primary\" role=\"alert\">No Bid Item is Added By AnyOne</div>";
?>

<?php
    include("partition/footer.php");
?>
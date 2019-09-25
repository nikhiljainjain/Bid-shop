<?php
include("partition/header.php");

$query = "SELECT * FROM ITEMS";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 0)
    echo "<div class=\"alert alert-primary\" role=\"alert\">No Bid Item is Added By AnyOne</div>";
else{
    // output data of each row
    echo "<br><table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">Product Name</th><th scope=\"col\">Description</th><th scope=\"col\">Owner</th></tr></thead><tbody>";
    $count = 0;
    while($row = mysqli_fetch_assoc($result)) {
        if ((new DateTime() < new DateTime($row["EXIT_TIME"])) == 1){
            $count += 1;
            echo "<tr><th scope=\"row\">".$count."</th><td>".$row["PNAME"]."</td><td>".$row["PDESCP"]."</td><td>".$row["OWNER"]."</td></tr>";
        }
    }
    echo "</tbody></table>";
}

include("partition/footer.php");
?>
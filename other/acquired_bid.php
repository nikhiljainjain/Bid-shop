<?php
include("partition/header.php");
$owner = $_COOKIE["username"];
$query = "SELECT * FROM ITEMS WHERE OWNER=\"".$owner."\"";

$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 0)
    echo "<div class=\"alert alert-warning\" role=\"alert\">No Bid Item is Added By You</div>";
else{
    // output data of each row
    echo "<br><table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">Product Name</th><th scope=\"col\">Description</th><th scope=\"col\">Status</th></tr></thead><tbody>";
    $count = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $count += 1;
        echo "<tr><th scope=\"row\">".$count."</th><td>".$row["PNAME"]."</td><td>".$row["PDESCP"]."</td><td>";
        if ((new DateTime() < new DateTime($row["EXIT_TIME"])) == 1)
           echo  "Running";
        else 
            echo "Bid is Expired";
        echo "</td></tr>";
    }
    echo "</tbody></table>";
}

include("partition/footer.php");
?>
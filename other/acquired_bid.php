<?php
include("partition/header.php");
$owner = $_COOKIE["username"];
$query = "SELECT * FROM ITEMS WHERE OWNER=\"".$owner."\"";

$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 0)
    echo "<div class=\"alert alert-warning\" role=\"alert\">No Bid Item is Added By You</div>";
else{
    // output data of each row
    echo "<br><table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">Product Name</th><th scope=\"col\">Description</th><th scope=\"col\">Status</th><th scope=\"col\">Delete Button</th></tr></thead><tbody>";
    $count = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $count += 1;
        echo "<tr><th scope=\"row\">".$count."</th><td>".$row["PNAME"]."</td><td>".$row["PDESCP"]."</td><td>";
        if ((new DateTime() < new DateTime($row["EXIT_TIME"])) == 1)
           echo  "Running";
        else 
            echo "Bid is Expired";
        echo "</td><td><a href=\"delete_item.php?id=".$row["ITEMID"]."\" class=\"btn btn-danger\">Delete This</td></tr>";
    }
    echo "</tbody></table>";
}

echo "<br><small class=\"form-text text-muted\">You can't roll back to deleted item.</small>";

include("partition/footer.php");
?>
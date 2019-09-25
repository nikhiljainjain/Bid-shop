<?php
include("partition/header.php");
//ITEMID INT, USER VARCHAR(26) NOT NULL, BPRICE INT NOT NULL, TIME TIMESTAMP
echo "<br>";
if (!empty($_GET["id"])){
    
    $query = "SELECT * FROM BID WHERE ITEMID=\"".$_GET["id"]."\";";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 0)
        echo "<div class=\"alert alert-warning\" role=\"alert\">No BidDING List for this Item</div>";
    else{
        echo "<br><table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">USER</th><th scope=\"col\">BID PRICE</th></tr></thead><tbody>";
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if ((new DateTime() < new DateTime($row["EXIT_TIME"])) == 1){
                $count += 1;
                echo "<tr><th scope=\"row\">".$count."</th><td>".$row["USER"]."</td><td>".$row["BPRICE"]."</td>";
            }
        }
        echo "</tbody></table>";
    }
        
}else{
    echo "<div class=\"alert alert-danger\" role=\"alert\"><h1>Invalid Request</h1></div>";
}
    
include("parTition/footer.php");    
?>
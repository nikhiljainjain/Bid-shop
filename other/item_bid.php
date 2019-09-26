<?php

include("partition/header.php");
//ITEMID INT, USER VARCHAR(26) NOT NULL, BPRICE INT NOT NULL, TIME 
echo "<br>";

function alert($msg){
    echo "<script>alert($msg);</script>";
}

function warning($msg){
    echo "<div class=\"alert alert-danger\" role=\"alert\">$msg</div>";
}

function success($msg){
    echo "<div class=\"alert alert-primary\" role=\"alert\">$msg</div><br>";
}


if (!empty($_GET["id"]) && !empty($_POST["bid"])){
    $flag = 0;
    $id = $_GET["id"];
    $bprice = $_POST["bid"];
    $user = $_COOKIE["username"];
    
    $query = "SELECT MAX(BPRICE) AS BPRICE FROM BID WHERE ITEMID=\"$id\";";
    
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if (($row["BPRICE"] > $bprice) == 1){
            $flag = 1;
            $msg = 3;
        }
    }
    
    if($flag == 0){
        $the_time =  date("Y-m-d");
        $query = "INSERT INTO BID (ITEMID, USER, BPRICE, ADD_TIME) VALUES (\"$id\", \"$user\", $bprice, \"$the_time\")";
        $result = mysqli_query($db, $query);
        $msg = 2;
        if ($result == 1)
            $msg = 1;   
    }
    header("Location: $_PHP_SELF?id=$id&msg=$msg");
        

}else if (isset($_GET["id"]) && isset($_GET["msg"])){
    
    if ($_GET["msg"] == "1")
        success("Data Added success fully");
    else if ($_GET["msg"] == "2")
        warning("Something happening wrong");
    else if ($_GET["msg"] == "3")
        warning("You have entered lesser amount than last BID amount");
    
    $_GET["msg"] = 0;
    
    $query = "SELECT * FROM BID WHERE ITEMID=\"".$_GET["id"]."\" ORDER BY BPRICE;";
    alert($query);
    $result = mysqli_query($db, $query);
    
    if (mysqli_num_rows($result) == 0)
        warning("No BidDING List for this Item");
    else{
        echo "<br><table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">USER</th><th scope=\"col\">BID PRICE</th><th scope=\"col\">TIME</th></tr></thead><tbody>";
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
                $count += 1;
                echo "<tr><th scope=\"row\">".$count."</th><td>".$row["USER"]."</td><td>".$row["BPRICE"]."</td><td>".$row["ADD_TIME"]."</td>";
        }
        echo "</tbody></table>";
    }
    $_GET["msg"] = 0;    

}else {
    $_GET["msg"] = 0;
    warning("Invalid Request");
}
?>
<br>
<fieldset>
    <legend>Bid Amount Enter Here</legend>
    <br>
    <form method="post" action="<?php $_PHP_SELF ?>">
    <!--input type="text" hidden="true" disabled="true" value="<php echo $_GET["id"]; ?>" name="id" /-->
        <div class="input-group">
          <input type="text" class="form-control" name="bid" aria-label="Rupees Amount">
          <div class="input-group-append">
            <span class="input-group-text">Rs.</span>
          </div>
        </div>
        <small class="form-text text-muted">Price should be Greater than the last Bid price.</small>
        <br>
        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Bid This</button>
    </form>
</fieldset>
<br>
<?php    
include("partition/footer.php");    
?>
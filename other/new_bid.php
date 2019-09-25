<?php
include("partition/header.php");

if (!empty($_POST["pname"]) && !empty($_POST["pprice"]) &&!empty($_POST["pedate"]) &&!empty($_POST["pdescp"])){ 
    $ppname = $_POST["pname"];
    $pprice = $_POST["pprice"];
    $pedate = $_POST["pedate"];
    $pdescp = $_POST["pdescp"];
    $owner = $_COOKIE["username"];
    if ((new DateTime() < new DateTime($pedate)) == 1){
       $query = "INSERT INTO ITEMS (PNAME, PPRICE, PDESCP, OWNER, EXIT_TIME) VALUES (\"$ppname\", \"$pprice\", \"$pdescp\", \"$owner\", \"$pedate\")";
        $result = mysqli_query($db, $query);
        if ($result == 1)
            echo "<div role=\"alert\" class=\"alert alert-success\">Product added successfully</div>"; 
        else
            echo "<div role=\"alert\" class=\"alert alert-warning\">Something happening wrong. Please try again later.</div>"; 
    }else
        echo "<div role=\"alert\" class=\"alert alert-warning\">Invalid Date. Please Enter future Date</div>";
}else if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<div role=\"alert\" class=\"alert alert-warning\">Something is missing</div>";
    if (empty($_POST["pname"]))
        echo "<div role=\"alert\" class=\"alert alert-danger\">Product name is missing</div><br>";
    if (empty($_POST["pprice"]))
        echo "<div role=\"alert\" class=\"alert alert-danger\">Product price is missing</div><br>";
    if (empty($_POST["pedate"]))
        echo "<div role=\"alert\" class=\"alert alert-danger\">Product expiry date is missing</div><br>";
    if (empty($_POST["pdescp"]))
        echo "<div role=\"alert\" class=\"alert alert-danger\">Product description is missing</div><br>";
}
?>
<br>
<form action="<?php $_PHP_SELF ?>" autocomplete="off" method="post">
  <div class="form-group">
    <label for="pname">Product Name</label>
    <input type="text" class="form-control" id="pname" name="pname" required="true" placeholder="XYZ">
  </div>
    <div class="form-group">
    <label for="pprice">Product Price</label>
    <input type="text" class="form-control" id="pprice" name="pprice" required="true" placeholder="99898">
        <small class="form-text text-muted">Minimum product price you want from Bidder.</small>
  </div>
  <div class="form-group">
    <label for="pedate">Expiry Date</label>
    <input type="date" class="form-control" id="pedate" name="pedate" required="true">
      <small class="form-text text-muted">Last date upto which item will display for BID.</small>
  </div>
    <div class="form-group">
    <label for="pdescp">Product Description</label>
    <textarea class="form-control" id="pdescp" name ="pdescp" rows="3" required="true"></textarea>
      <small class="form-text text-muted">Enter product description</small>
  </div>
  <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
</form>
<?php
include("partition/footer.php");
?>
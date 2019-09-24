<?php 
//159001504339
include('./header.php');
include('../config/index.php');
session_start();
$result = NULL;
$color = "primary";
//if ($_SERVER["REQUESTS"] == "POST"){

if (!empty($_POST["uname"]) && !empty($_POST["pswrd"])){
    $user = $_POST["uname"];
    $pswrd = $_POST["pswrd"];
    //$user = mysql_real_escape_string($user);
    //$pwsrd = mysql_real_escape_string($pswrd);
    $query = sprintf("SELECT * FROM USER WHERE USERNAME='%s' AND PASSWORD='%s'", $user, $pswrd);
    $result = mysqli_query($query);
    if (mysqli_num_rows($result)> 0)
        echo $result;
}

?>
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <img class="brand-img" src="/remark/assets/images/logo-colored.png" alt="...">
                    <h2 class="brand-text font-size-18">AMAN TRADING COMPANY</h2>
                </div>
                <form method="post" action="<?php $_PHP_SELF ?>" autocomplete="off">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" required class="form-control" name="uname" />
                        <label class="floating-label">UserName</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" required minlength="5" class="form-control" name="pswrd" />
                        <label class="floating-label">P@ssw0rd</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
                </form>
                <p>Still no account? Please go to <a href="./signup.php">Sign up</a></p>
                <a class="btn btn-primary btn-block btn-lg mt-40" href="/">Go To Home Page</a>
            </div>
        </div>
<?php 
include('./footer.php');
?>
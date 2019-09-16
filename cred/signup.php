<?php 
include('./header.php');
include('../config/index.php');

/*if ($_POST["uname"] && $_POST["pswrd"]){
    $user = $_POST["uname"];
    $pswrd = $_POST["pswrd"];
    $query = "SELECT * FROM USERS WHERE USERNAME=\"" . $user . "\" AND PASSWORD=\"" . $pswrd . "\"";
    $result = mysqli_query($query, $db);
    echo $query . "<br/>something happening" . $result . " x";
    //if ($result == ""){
        $query = sprintf("INSERT INTO USERS VALUES ('%s', '%s')", $user, $pswrd);
        $final = mysqli_query($query);
        echo "<br/>User registered " . $final;
    //}
}*/ 
$result = "";
?>
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <img class="brand-img" src="/remark/assets/images/logo-colored.png" alt="...">
                    <h2 class="brand-text font-size-18">Aman Trading Company</h2>
                </div>
                <?php //if ($result != ""){ ?>
                    <div class="alert dark alert-icon alert-<%= color %> alert-dismissible">
                        Data alredy exist. Please try something else.
                    </div>
                 
                ?>
                <form method="post" action="<?php $_PHP_SELF ?>" autocomplete="off">
                    <!--div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" maxlength="26" required minlength="3" class="form-control" name="name" />
                        <label class="floating-label">Name</label>
                    </div-->
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" maxlength="26" required minlength="4" class="form-control" name="uname" />
                        <label class="floating-label">UserName</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" maxlength="26" required minlength="4" class="form-control" name="pswrd" />
                        <label class="floating-label">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
                </form>
                <p>Alredy User<a href="./login.php"> Login</a></p>
                <a class="btn btn-primary btn-block btn-lg mt-40" href="/">Go To Home Page</a>
            </div>
        </div>
<?php 
include('./footer.php');
?>
 
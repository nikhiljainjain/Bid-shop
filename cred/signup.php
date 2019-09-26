<?php 
include('./header.php');

//filtertion for alphanumeric username only

if (!empty($_POST["uname"]) && !empty($_POST["pswrd"]) && !empty($_POST["name"])){
    $user = $_POST["uname"];
    $pswrd = $_POST["pswrd"];
    $name = $_POST["name"];
    if(!preg_match('/[^a-z_\-0-9]/i', $user)){
        $query = sprintf("INSERT IGNORE INTO USER VALUES ('%s', '%s', '%s')", $user, $name, $pswrd);
        $result = mysqli_query($db, $query);
        if ($result == 1){
            setcookie("username", $user, time() + (86400 * 30), "/");
            header('Location: ../other/index.php');
        }   
    }else
        $result = 0;
}
?>
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <img class="brand-img" src="/remark/assets/images/logo-colored.png" alt="...">
                    <h2 class="brand-text font-size-18"><?php echo $site_name; ?></h2>
                </div>
                <?php 
                    if ($result != 1)
                        echo "<div class=\"alert dark alert-icon alert-warning alert-dismissible\">Something happening wrong</div>";
                ?>
                <form method="post" action="<?php $_PHP_SELF ?>" autocomplete="off">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" maxlength="26" required minlength="3" class="form-control" name="name" />
                        <label class="floating-label">Name</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" maxlength="26" required minlength="4" class="form-control" name="uname" />
                        <label class="floating-label">UserName</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" maxlength="26" required minlength="4" class="form-control" name="pswrd" />
                        <label class="floating-label">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign-Up</button>
                </form>
                <p>Alredy User<a href="./login.php"> Login</a></p>
                <a class="btn btn-primary btn-block btn-lg mt-40" href="/">Go To Home Page</a>
            </div>
        </div>
<?php 
 include('footer.php');
?>
 
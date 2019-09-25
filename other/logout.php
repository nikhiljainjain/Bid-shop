<?php
echo $COOKIE["username"];
if (setCookie["username"]){
    setcookie("username", "", time()-6000, "/");
    header("Location: ../index.php");
}
?>
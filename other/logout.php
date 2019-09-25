<?php
session_start();
session_destroy();
if ($_COOKIE["username"]){
    unset($_COOKIE["username"]);
    setcookie("username", null, -1, "/");
    header("Location: ../index.php");
}
?>
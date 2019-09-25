<?php 
include('../config/index.php');
if (isset($_COOKIE["username"])){
    header("Location:../other/index.php");
}
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title><?php echo $site_name; ?></title>

    <link rel="apple-touch-icon" href="./remark/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="./remark/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./remark/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="./remark/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="./remark/assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="./remark/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="./remark/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="./remark/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="./remark/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="./remark/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="./remark/global/vendor/jquery-mmenu/jquery-mmenu.css">
    <link rel="stylesheet" href="./remark/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="./remark/global/vendor/waves/waves.css">
    <link rel="stylesheet" href="./remark/assets/examples/css/pages/login-v3.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="./remark/global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="./remark/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <script src="./remark/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v3 layout-full">
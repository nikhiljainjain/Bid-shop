<?php
include("../config/index.php");
if (!isset($_COOKIE["username"]))
    header("Location:../cred/index.php");
?>
<!DOCTYPE html>
<html>
<head><title>MADE BY NIKHIL JAIN</title></head>
<link rel="stylesheet" text="text/css" href="../stylesheet/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../stylesheet/index.css" />
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark bg-primary">
      <a class="navbar-brand" href="#"><?php echo $site_name; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home(List of Bid)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new_bid.php">Add BiD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acquired_bid.php">Acquired BiD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log-Out</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
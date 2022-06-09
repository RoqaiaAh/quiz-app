<?php
$db = new mysqli("localhost","root","","loginsystem");
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  } 
?>
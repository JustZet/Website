<?php
// Db params
$host       = "localhost";
$username   = "root";
$db_name    = "index";
$password   = "";
// Connect with database
$con = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if($con === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}
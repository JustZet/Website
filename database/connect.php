<?php
// Db params
$host = "localhost";
$username = "root";
$db_name = "index";
$password = "";
// Connect with database
if ($con = mysqli_connect($host, $username, $password, $db_name)) {

} else {
    echo "Error". $conn->error;
}

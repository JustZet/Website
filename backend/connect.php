<?php
// Post records.
$Phone            = $_POST['phoneNum'];
$Password         = $_POST['password'];
// Connect with db
require('../database/connectdb.php');

if(isset($_POST['submit'])) {
$sql = "SELECT * FROM website WHERE PhoneNumber='".$Phone."' AND Password='".$Password."'LIMIT 1";
  $result     = mysqli_query($con, $sql);
  $rows       = mysqli_num_rows($result);
  $newURL     = ('../home.html');
  if($rows == 1) {
    header('Location: '.$newURL);
    exit();
  }else {
    header('Location: ../signin.php?info=error');
  };
};
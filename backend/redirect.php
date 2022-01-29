<?php
//Post records
$firstname            = $_POST['firstName'];
$lastname             = $_POST['lastName'];
$Adress               = $_POST['adress'];
$Phone                = $_POST['phoneNum'];
$Password             = $_POST['password'];
$imgFileSize          = $_FILES["fileToUpload"]['size']; // Size of file
$Img                  = $_FILES['fileToUpload']['name']; // Name of file
$type                 = $_FILES['fileToUpload']['type']; // Type of file

$target_dir           = "../images/uploads/";
$target_file          = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType        = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Check if the database is compatible.
require('../database/connectdb.php');

// check type of file.
if($imageFileType != "img" && 
   $imageFileType != "jpeg" && 
   $imageFileType != "jpg" && 
   $imageFileType != "gif" && 
   $imageFileType != "png") {
    header('Location: ../signup.php?info=fileError');
  die();
} 
else {
    // Create a session.
  session_start();
    $_SESSION['fullName']       = $firstname.' '.$lastname;
    $_SESSION['adress']         = $Adress;
    $_SESSION['mobile']         = $Phone;

  if(isset($_POST["submit"])) { // Create account.
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // Upload file in folder
      
    // database insert sql
  $sql = "INSERT INTO website 
                      (FirstName, LastName, Adress, PhoneNumber, Password, FileName) 
          VALUES ('$firstname', '$lastname', '$Adress', '$Phone', '$Password', '$Img');";
  if ($con->query($sql) === TRUE) {
    header("Location: ../signin.php?info=accountCreated");
  } else {
      echo "Error: ".$sql.'<br>'.$con->error;
    }
  $con->close();
    } else {
      die();
    };
  };
};

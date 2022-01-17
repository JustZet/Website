<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connected</title>
  <link rel="stylesheet" href="../css/index.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<div id="sources">
  <ul>
    <b>
      <li><a href="home.html"><span class="material-icons">
        home
        </span></a></li>
      <li id="signup-bar"><a href="signup.html">Sign up</a></li>
      <li id="signin-bar"><a href="signin.php">Sign in</a></li>
      <li id="sessions-bar"><a href="sessions.php">Sessions</a></li>
    </b>
  </ul>
</div>

<div class="container info">
<?php
//Post records
$firstname            = $_POST['firstName'];
$lastname             = $_POST['lastName'];
$Adress               = $_POST['adress'];
$Phone                = $_POST['phoneNum'];
$Password             = $_POST['password'];
$imgFileSize          = $_FILES["fileToUpload"]['size']; // Size of file
$Img                  = $_FILES['fileToUpload']['name']; // Name of file
$target_dir           = "../uploads/";
$target_file          = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType        = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$type                 = $_FILES['fileToUpload']['type'];

//Check if the database is compatible.
require('../database/connectdb.php');

// check type of file.
if($imageFileType != "img" && 
   $imageFileType != "jpeg" && 
   $imageFileType != "jpg" && 
   $imageFileType != "gif" && 
   $imageFileType != "png") {
  echo 'Sorry but is accepted only media .jpeg / .gif / .png... <br>
  Please go back to sign up page and load one accepted type of image. <br>';
  echo '<a href="../signup.html" id="goBack">Go back!</a>';
  die();
} 
else {
    // Create a session.
  session_start();
    $_SESSION['fullName']       = $firstname.' '.$lastname;
    $_SESSION['adress']         = $Adress;
    $_SESSION['mobile']         = $Phone;

  if(isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // Upload file in folder
      
    // database insert sql
  $sql = "INSERT INTO website (FirstName, LastName, Adress, PhoneNumber, Password, FileName) 
          VALUES ('$firstname', '$lastname', '$Adress', '$Phone', '$Password', '$Img');";
  if ($con->query($sql) === TRUE) {
    header("Location: ../signin.php?=created");
  } else {
      echo "Error: ".$sql.'<br>'.$con->error;
    }
  $con->close();

    } else {
      die();
    };
  };
};
?>

</div>
</body>
</html>

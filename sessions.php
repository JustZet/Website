<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" media="screen and (max-width: 1050px)" href="css/widerscreen.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="css/smallerscreen.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<div id="sources">
  <ul>
    <b>
      <li><a href="#home"><span class="material-icons">
        home
        </span></a></li>
      <li><a href="./index.html">LOG IN</a></li>
      <li class="active"><a href="sessions.php">SESSIONS</a></li>
    </b>
  </ul>
</div>
<div class="container info">
    <?php
    session_start();
    if(isset($_SESSION['fullName'])){
      echo '<h3>Your profile: </h3> <br>';
        echo 'Your full name: '.$_SESSION['fullName'].'<br>';
        echo 'Your adress: '.$_SESSION['adress'].'<br>';
        echo 'Phone number: '.$_SESSION['mobile'].'<br>';
    }
    ?>
</div>
</body>
</html>

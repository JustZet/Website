<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>
<body class="init">
<header id="sources">
  <ul><b>
    <li><a href="home.html"><span class="material-icons active">home</span></a></li>
    <li id="signup-bar"><a href="signup.php">Sign up</a></li>
    <li id="signin-bar"><a href="signin.php">Sign in</a></li>
    <li id="sessions-bar"><a href="sessions.php">Sessions</a></li>
  </ul></b>
</header>

<div class="container info">
    <?php
    session_start();
    if(isset($_SESSION['fullName'])){
      echo '<h3>Your profile: </h3> <br>';
        echo 'Your full name: '.$_SESSION['fullName'].'<br>';
        echo 'Your adress: '.$_SESSION['adress'].'<br>';
        echo 'Phone number: '.$_SESSION['mobile'].'<br>';
    };
    ?>
</div>
<script src="backend/background.js"></script>
</body>
</html>

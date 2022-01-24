<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <script src="backend/functions.js"></script>
</head>
<body class="init">

<header id="navbar" class="topnav"><ul><b>
    <div id="Sidepanel" class="sidepanel">
      <li><div id="mainmenu">Main menu</div></li>
      <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="material-icons">close</span></a></li>
      <li><a href="home.html">Home</a></li>
      <li><a href="signup.php">Sign up</a></li>
      <li><a href="signin.php">Sign in</a></li>
      <li><a href="sessions.php">Sessions</a></li>
    </div>
    <a href="javascript:void(0);" class="openbtn" onclick="openNav()">
      <span class="material-icons">menu</span>
    </a>
</header></ul></b>

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
</body>
</html>

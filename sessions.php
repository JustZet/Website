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
      <div class="sidepanel-top">
        <li><div id="mainmenu">Main menu</div></li>
        <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="material-icons">close</span></a></li>
        <li class="border-menu"><a href="home.html">Home</a></li>
        <li class="border-menu"><a href="sessions.php">Sessions</a></li>
      </div>
      <div class="sidepanel-bottom">
        <li class="border-menu"><a href="signup.php">Sign up</a></li>
        <li class="border-menu"><a href="signin.php">Sign in</a></li>
      </div>
    </div>
    <a href="javascript:void(0);" class="openbtn" onclick="openNav()">
      <span class="material-icons">menu</span>
    </a>
</header></ul></b>

<section class="container info">
    <?php
    session_start();
    if(isset($_SESSION['fullName'])){
      echo '<h3>Your profile: </h3> <br>';
        echo 'Your full name: ' .$_SESSION['fullName'].'<br>';
        echo 'Your adress: '    .$_SESSION['adress']  .'<br>';
        echo 'Phone number: '   .$_SESSION['mobile']  .'<br>';
    };
    ?>
</section>
</body>
</html>

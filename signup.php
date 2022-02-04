<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

<div class="container login">
    <h2>Create an account:</h2> 
<div>
    <form action="backend/redirect.php" method="post" enctype="multipart/form-data"><br>
      <b>
      <label for="firstName" id="label">FIRST NAME:</label> <br>
        <input type="text" 
              name="firstName" 
              title="FirstName"
              required> <br>
      <label for="lastName">LAST NAME:</label> <br>
        <input type="text" 
              name="lastName" 
              title="LastName"
              required> <br>
      <label for="adress">ADRESS:</label> <br>
        <textarea name="adress" 
                  cols="22" 
                  rows="2"></textarea> <br>
      <label for="number">PHONE NUMBER:</label> <br>
        <input type="text" 
              pattern="(^[0][7][0-9]{8})" 
              required 
              name="phoneNum" 
              title="title"
              placeholder="07-"> <br>
      <label for="password">PASSWORD:</label> <br>
        <input minlength="5" 
              type="password" 
              name="password" 
              title="Password"
              id="password"
              pattern="[A-Za-z]{+6}"
              required
              > <br>
      <label for="fileToUpload">YOUR PFP:</label> <br>
      <input type="file" 
            title="fileToUpload" 
            name="fileToUpload"
            id="fileToUpload">
         <br>
      <input type="submit" 
            value="Submit" 
            name="submit">
      <a href="signin.php"
         class="signin-bottom">sign in</a> <br>
      </b>
      <?php
        if(isset($_GET['info']) && $_GET['info'] == 'fileError') {
            echo '<p id="error"><i>Sorry but is accepted only pfp .jpeg / .gif / .png...</i></p>';
        }
        ?>
    </form>
  </div>
</div>
</body>
</html>

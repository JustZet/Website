<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>
<body class="init">
<header id="navbar">
  <ul><b>
    <li><a href="home.html"><span class="material-icons active">home</span></a></li>
    <li id="signup-bar"><a href="signup.php">Sign up</a></li>
    <li id="signin-bar"><a href="signin.php">Sign in</a></li>
    <li id="sessions-bar"><a href="sessions.php">Sessions</a></li>
  </ul></b>
</header>

<div class="container login">
    <h2>Sign in:</h2> 
<div>
    <form action="backend/connect.php" method="post" enctype="multipart/form-data"><br><b>
      <label for="number">PHONE NUMBER:</label>
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
              required> <br>
      <input type="submit" 
            value="Sign in" 
            name="submit"> <br>
      <a href="signup.php"
         class="signup-bottom">Need an account?</a> 
      </b>
      <?php 
         if(isset($_GET['info']) && $_GET['info'] == 'error' ) {
             echo '<p ID="error"><i>Phone number or passowrd are incorect!</i></p>';
         }
         ?>
    </form>
  </div>
</div>
</body>
</html>

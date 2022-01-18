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
<body>
<div id="sources">
  <ul>
    <b>
      <li><a href="home.html"><span class="material-icons">
        home
        </span></a></li>
      <li id="signup-bar"><a href="signup.php">Sign up</a></li>
      <li id="signin-bar"><a href="signin.php">Sign in</a></li>
      <li id="sessions-bar"><a href="sessions.php">Sessions</a></li>
    </b>
  </ul>
</div>

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
            echo '<p id="errorfile"><i>Sorry but is accepted only pfp .jpeg / .gif / .png...</i></p>';
        }
        ?>
    </form>
  </div>
</div>



</body>
</html>

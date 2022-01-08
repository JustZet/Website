<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

      // Get data from website ...
      require("db/connect.php");
      $sql = "SELECT * FROM website ORDER BY id DESC LIMIT 1;";
      $query = mysqli_query($con, $sql);
      $numrows = mysqli_num_rows($query);
      if ($numrows > 0) {
        echo 'FirstName <br>';
        while ($a = mysqli_fetch_assoc($query)) {
          echo $a['ID'].'<br>';
        }
      } else {
        echo '0 Results.';
      }
      
    ?>
</body>
</html>
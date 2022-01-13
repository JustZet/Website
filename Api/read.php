<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '/xampp/htdocs/local/Website/database/Database.php';
  include_once '/xampp/htdocs/local/Website/Models/post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();


  $post = new Post($db);


  $result = $post->read();
  
  // Get row count
  $num = $result->rowCount();

  // Check if any categories
  if($num > 0) {
        // Cat array
        $posts_arr = array();
        $posts_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          extract($row);

          $post_item = array(
            'ID' => $ID,
            'First Name' => $FirstName,
            'Last Namee' => $LastName,
            'Adress' => $Adress,
            'Mobile' => $PhoneNumber,
            'Pfp' => $FileName
          );

          // Push to "data"
          array_push($posts_arr['data'], $post_item);
        }

        // Turn to JSON & output
        echo json_encode($posts_arr, JSON_PRETTY_PRINT);

  } else {
        // No Categories
        echo json_encode(
          array('message' => 'No Categories Found')
        );
  }

<?php 
  class Post {
    // DB stuff
    private $conn;

    // Post Properties
    public $ID;
    public $FirstName;
    public $LastName;
    public $Adress;
    public $PhoneNumber;
    public $Password;
    public $FileName;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM website';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
  }

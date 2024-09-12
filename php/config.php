<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

/*

class Database {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "chatapp";
    private $conn;

    // Constructor to initialize the database connection
    public function __construct() {
        $this->connect();
    }

    // Method to establish the connection
    private function connect() {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Database connection error: " . $this->conn->connect_error);
        }
    }

    // Method to get the connection
    public function getConnection() {
        return $this->conn;
    }

    // Destructor to close the connection
    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

// Usage example
$db = new Database();
$connection = $db->getConnection();

if ($connection) {
    echo "Connected to the database successfully!";
} else {
    echo "Failed to connect to the database.";
}
?>

*/

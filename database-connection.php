<?php
class DatabaseConnector {
    private $host = 'localhost';
    private $username = 'your_username';
    private $password = 'your_password';
    private $database = 'your_database';
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->database}", 
                $this->username, 
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getUsers() {
        $query = "SELECT id, name, email FROM users";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser($name, $email) {
        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $this->connection->prepare($query);
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email
        ]);
    }
}

// Usage example
$db = new DatabaseConnector();
$users = $db->getUsers();
print_r($users);

<?php

class User extends Database {
    protected $db;

    public function __construct($db) {
        parent::__construct(); // Вызов конструктора родительского класса Database
        $this->db = $db;
    }

    // Register a new user with hashed password
    public function register($nickname, $email, $password) {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->db->prepare("INSERT INTO users (nickname, email, password) VALUES (:nickname, :email, :password)");
            $stmt->bindParam(':nickname', $nickname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {
                return "User registered successfully!";
            } else {
                return "Error: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // User login
    public function login($email, $password) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($password, $user['password'])) {
                return "Login successful!";
            } else {
                return "Invalid email or password.";
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

?>

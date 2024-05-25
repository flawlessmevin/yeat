<?php
class Form extends Database {
    public function __construct() {
        parent::__construct();
    }
    public function generate_form(){


    }
    public function saveMessage($name, $email, $message, $date) {
        global $db;

        try {
            $stmt = $db->prepare("INSERT INTO messages (name, email, message, date) VALUES (:name, :email, :message, :date)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':date', $date);

            if ($stmt->execute()) {
                return "Message sent successfully!";
            } else {
                return "Error: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
?>
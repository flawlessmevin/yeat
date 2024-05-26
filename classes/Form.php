<?php
class Form extends Database {
    public function __construct() {
        parent::__construct();
    }
    public function generate_form(){
        ?>
        <form id="contactForm" action="process_form.php" method="post" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <label>
                <input type="checkbox" id="consent" name="consent" required>
                I consent to the processing of personal data.
            </label>

            <button type="submit">Send</button>
        </form>
        <div id="notification"></div>
        <?php
    }
    public function saveMessage($name, $email, $message, $date) {
        try {
            $stmt = $this->db->prepare("INSERT INTO messages (name, email, message, date) VALUES (:name, :email, :message, :date)");
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
<?php
class Form extends Database{
    public function __construct()
    {
        parent::__construct();
    }

    public function generate_form()
    {
        ?>
        <form id="contactForm" action="thankyou.php" method="post" onsubmit="return validateForm()">
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

            <button type="submit" name="contact_submitted">Send</button>
        </form>
        <div id="notification"></div>
        <?php
    }

    public function insert()
    {
        if ($this->db) {
            if (isset($_POST['contact_submitted'])) {
                $data = array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'message' => $_POST['message'],
                    'date' => date('Y-m-d H:i:s')
                );

                try {
                    $query = "INSERT INTO messages (name, email, message, date) 
                              VALUES (:name, :email, :message, :date)";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
        } else {
            echo 'No connection to the database';
        }
    }

    public function select()
    {
        try {
            $sql = "SELECT * FROM messages";
            $query = $this->db->query($sql);
            $messages = $query->fetchAll();
            return $messages;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $data = array(
                'message_id' => $_POST['delete_message']
            );
            $query = "DELETE FROM messages WHERE message_id = :message_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function select_single($message_id)
    {
        try {
            $data = array('message_id' => $message_id);
            $query = "SELECT * FROM messages WHERE message_id = :message_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
            $message_data = $query_run->fetch();
            return $message_data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function edit($message_id, $new_data)
    {
        try {
            // Assemble data for update
            $data = array(
                'message_id' => $message_id,
                'name' => $new_data['name'], // Assuming we have an array $new_data with new data
                'email' => $new_data['email'],
                'message' => $new_data['message'],
                'date' => date('Y-m-d H:i:s') // Updating the date to current date and time
            );

            $query = "UPDATE messages SET name = :name, email = :email, message = :message, date = :date WHERE message_id = :message_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
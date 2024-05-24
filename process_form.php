<?php
include 'classes/Form.php';

$form = new Form();

// GETTING DATA FROM FORM
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = isset($_POST['date']) ? 1 : 0;

$date = date('Y-m-d H:i:s');

// SAVE MESSAGE
$result = $form->saveMessage($name, $email, $message, $date);
if ($result === "Message sent successfully!") {
    header('Location: thankyou.php');
    exit;
} else {
    echo "Error: " . $result;
}
?>

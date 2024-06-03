<?php



include "parts/header.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $city = $_POST['city'];
    $info = $_POST['info'];
    $tickets = $_POST['tickets'];
    $rsvp = $_POST['rsvp'];


    $concert = new Concert();


    $success = $concert->create_concert($date, $venue, $city, $info, $tickets, $rsvp);


    if ($success) {
        header('Location: admin_tour.php');
        exit;
    } else {
        echo "Error: Unable to create concert.";
    }
} else {
    echo "Error: Form data not provided.";
}

include "parts/footer.php"; ?>

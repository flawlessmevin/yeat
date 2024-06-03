<?php


include 'parts/header.php';

if(isset($_GET['id'])) {

    $concert_id = $_GET['id'];


    $concert = new Concert();


    $success = $concert->delete_concert($concert_id);


    if($success) {
        header('Location: admin_tour.php');
        exit;
    } else {
        echo "Error: Unable to delete concert.";
    }
} else {
    echo "Error: Concert ID not provided.";
}



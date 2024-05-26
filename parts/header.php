<?php
require_once "functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
    $page_object = new Page($page_name);
    ?>
    <title><?php echo 'Yeat | ' . $page_object->get_page_title(); ?></title>
    <?php $page_object->add_stylesheets(); ?>
</head>

<header class="banner">
    <div class="logo">
        <a href="index.php">
            <img src="./img/yeat-twizzy gif.gif" height="40">
        </a>
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="music.php">Music</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="tour.php">Tour</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>
    <div class="overlay" id="overlay"></div>
</header>

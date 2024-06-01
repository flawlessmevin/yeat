<?php



require('../_inc/functions.php');
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
        <a href="../index.php">
            <img src="../img/yeat-twizzy gif.gif" height="40">
        </a>
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="../templates/home.php">HOME</a></li>
            <li><a href="../templates/music.php">MUSIC</a></li>
            <li><a href="../templates/video.php">VIDEO</a></li>
            <li><a href="../templates/tour.php">TOUR</a></li>
            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
                <li><a href="../templates/logout.php">LOGOUT</a></li>
            <?php else: ?>
                <li><a href="../templates/login.php">LOGIN</a></li>
            <?php endif; ?>
        </ul>
        <div class="hamburger" id="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>


    <div class="overlay" id="overlay"></div>
</header>

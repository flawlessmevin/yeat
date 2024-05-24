<?php require 'db/db.php' ?>
<?php include 'functions/functions.php'?>

<?php add_stylesheets()?>

<header class="banner">
    <div class="logo">
        <a href="index.php">
            <img src="./img/yeat-twizzy gif.gif" height="40">
        </a>
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
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


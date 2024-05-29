<?php
include('parts/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}?>
<main>
    <?php include 'parts/banner.php' ?>
    <div class="rozdel">
        <h2><a href="admin_tour.php" class="button_link">Edit Concerts</a></h2>
    </div>

</main>




<?php include_once('parts/footer.php') ?>

<?php
include('parts/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}?>
<main>
    <?php include 'parts/banner.php' ?>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <a href="admin_tour.php" class="btn btn-primary">Edit Concerts</a>
            </div>
        </div>
    </div>
</main>




<?php include_once('parts/footer.php') ?>

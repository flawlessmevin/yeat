<?php
include "parts/header.php";
?>

<main>
    <?php include 'parts/banner.php' ?>
    <?php $video = new Video();?>
    <div class="rozdel">
        <h2>VIDEOS</h2>
    </div>
    <div class="container-sm mt-5" id="albums">
        <?php
            $videos = $video->get_videos();
            $video->generate_videos($videos);
            ?>
    </div>
</main>

<?php include "parts/footer.php" ?>

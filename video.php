<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link rel="icon" href="./img/yeat icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/yeat icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>

<?php include "parts/header.php"?>
<main>
    <?php include "parts/banner.php"?>


    <div class="rozdel">
        <h2>VIDEOS</h2>
    </div>

    <div class="container-sm mt-5" id="albums">
        <?php
        $videos = get_videos();
        foreach ($videos as $video) {
            ?>
            <div class="row justify-content-around custom-mb">
                <?php
                switch ($video["video_id"] % 2) {
                    case 1:
                        ?>
                        <div class="col-md-5">
                            <iframe width="560" height="315" src="<?php echo $video["youtube_link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-5">
                            <h2 class="big-h2 glow-text"><?php echo $video["title"] ?></h2>
                            <h3 class="small-h3"><?php echo $video["channel"] ?></h3>
                        </div>
                        <?php
                        break;
                    case 0:
                        ?>
                        <div class="col-md-5">
                            <h2 class="big-h2 glow-text"><?php echo $video["title"] ?></h2>
                            <h3 class="small-h3"><?php echo $video["channel"] ?></h3>
                        </div>
                        <div class="col-md-5">
                            <iframe width="560" height="315" src="<?php echo $video["youtube_link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <?php
                        break;
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</main>

<?php include "parts/footer.php"?>

<script src="js/app.js"></script>
<script src="./js/hamb.js"></script>


</html>

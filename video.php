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






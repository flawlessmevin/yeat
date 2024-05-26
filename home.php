<?php include "parts/header.php"; ?>


<main>

    <?php include 'parts/banner.php'?>
    <?php $content = new Content(); ?>
    <div class="rozdel">
        <h2>BIOGRAPHY</h2>
    </div>

    <div class="container-sm mt-5 bot-mar">
        <div class="row justify-content-around">
            <div class="col-md-5">
                <?php
                $biography = $content->get_biography();
                $content->generate_biography($biography);
                ?>
            <div class="col-md-5">
                <h3 class="text-center big-h2">Background information</h3>
                <?php
                $info_table = $content->get_info_table();
                $content->generate_info_table($info_table);
                ?>
            </div>
        </div>
    </div>

    <div class="rozdel">
        <h2>Career</h2>
    </div>

    <div class="container-sm mt-5">
        <?php
        $career = $content->get_career();
        $content->generate_career($career);
        ?>
    </div>


    <div class="rozdel">
        <h2>Music Style</h2>
    </div>
    <div class="container-sm mt-5 bot-mar">
        <div class="row justify-content-around">
            <?php
            $music_styles = $content->get_music_styles();
            $content->generate_music_styles($music_styles);
            ?>
        </div>
    </div>
</main>

<?php include "parts/footer.php"; ?>

<?php include "parts/header.php"; ?>

<main>
    <?php $music = new Music();?>
    <div class="rozdel">
        <h2>Albums</h2>
    </div>
    <?php
        $albums = $music->get_albums();
        $music->generate_albums($albums);
        ?>
    <div class="rozdel">
        <h2>Singles</h2>
    </div>
    <?php
        $singles = $music->get_singles();
        $music->generate_singles($singles);
        ?>
</main>


<?php include "parts/footer.php"?>

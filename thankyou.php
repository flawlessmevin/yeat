<?php include "parts/header.php" ?>
<main>
    <?php include "parts/banner.php" ?>
    <div class="rozdel">
        <h2>Your message has been sent successfully</h2>
        <?php
        $message = new Form();
        echo $message->insert();
        ?>

    </div>
<?php include "parts/footer.php" ?>

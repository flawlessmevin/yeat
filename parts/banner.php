<?php
$page = basename($_SERVER['PHP_SELF']);

switch ($page) {
    case 'index.php':
        ?>
        <div class="image-container">
            <img src="./img/yeat 3 full width.jpg" alt="Full Width Image">
            <div class="text-overlay">
                <p class="glow-text" style="font-size: 150px;">YEAT</p>
            </div>
        </div>
        <?php
        break;
    case 'music.php':
        ?>
        <div class="image-container">
            <img src="./img/yeat 2 full width.jpg" alt="Full Width Image">
            <div class="text-overlay">
                <p class="glow-text" style="font-size: 150px">DISCOGRAPHY</p>
            </div>
        </div>
        <?php
        break;
    case 'video.php':
        ?>
        <div class="image-container">
            <img src="./img/yeat 1 full width.jpg" alt="Full Width Image">
            <div class="text-overlay">
                <p class="glow-text" style="font-size: 150px;">VIDEO</p>
            </div>
        </div>
        <?php
        break;
    case 'tour.php':
        ?>
        <div class="image-container">
            <img src="./img/yeat 4 full width.jpg" alt="Full Width Image">
            <div class="text-overlay">
                <p class="glow-text" style="font-size: 150px;">CONCERTS</p>
            </div>
        </div>
        <?php
        break;

}
?>

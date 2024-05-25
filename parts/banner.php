<?php
require_once ('functions/functions.php');
$page = basename($_SERVER['PHP_SELF']);

// Создаем экземпляр класса Database
$database = new Page();

// Запрос к базе данных для получения данных о баннере текущей страницы
$stmt = $database->getDb()->prepare("SELECT * FROM banners WHERE page_name = ?");
$stmt->execute([$page]);
$banner = $stmt->fetch(PDO::FETCH_ASSOC);

// Вывод баннера
if ($banner) {
    ?>
    <div class="image-container">
        <img src="<?php echo $banner['img']; ?>" alt="Full Width Image">
        <div class="text-overlay">
            <p class="glow-text" style="font-size: 150px;"><?php echo $banner['title']; ?></p>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="image-container">
        <img src="./img/banner_error.png" alt="Alternate Banner Image">
        <div class="text-overlay">
            <p class="glow-text" style="font-size: 50px;">BANNER NOT FOUND FOR THIS PAGE</p>
        </div>
    </div>
    <?php
}
?>

<?php



class Banner extends Database
{
    public function __construct() {
        parent::__construct();
    }

    public function generate_banner($page_name)
    {

        $stmt = $this->db->prepare("SELECT * FROM banners WHERE page_name = ?");
        $stmt->execute([$page_name]);
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
            // Если баннер не найден, выводим сообщение об ошибке
            ?>
            <div class="image-container">
                <img src="./img/banner_error.png" alt="Alternate Banner Image">
                <div class="text-overlay">
                    <p class="glow-text" style="font-size: 50px;">BANNER NOT FOUND FOR THIS PAGE</p>
                </div>
            </div>
            <?php
        }
    }
}
?>

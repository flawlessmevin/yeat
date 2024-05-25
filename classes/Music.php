<?php
class Music extends Database{
    public function __construct() {
        parent::__construct();
    }
    public function get_albums() {
        $query = $this->db->query("SELECT * FROM music WHERE type = 0");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function generate_albums($albums) {
        foreach ($albums as $album) {
            echo '<div class="container-sm mt-5" id="albums">';
            echo '<div class="row justify-content-around custom-mb">';
            echo '<div class="col-md-5">';
            echo '<iframe class="spotify-player" src="' . htmlspecialchars($album["spotify_link"]) . '" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
            echo '</div>';
            echo '<div class="col-md-5">';
            echo '<h2 class="big-h2 glow-text">' . htmlspecialchars($album["title"]) . '</h2>';
            echo '<h3 class="small-h3">' . htmlspecialchars($album["date"]) . '</h3>';
            echo '<p class="small-p">' . htmlspecialchars($album["description"]) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }


    public function get_singles() {
        $query = $this->db->query("SELECT * FROM music WHERE type = 1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function generate_singles($singles) {
        foreach ($singles as $single) {
            echo '<div class="container-sm mt-5" id="albums">';
            echo '<div class="row justify-content-around custom-mb">';
            echo '<div class="col-md-5">';
            echo '<iframe class="spotify-player" src="' . htmlspecialchars($single["spotify_link"]) . '" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
            echo '</div>';
            echo '<div class="col-md-5">';
            echo '<h2 class="big-h2 glow-text">' . htmlspecialchars($single["title"]) . '</h2>';
            echo '<h3 class="small-h3">' . htmlspecialchars($single["date"]) . '</h3>';
            echo '<p class="small-p">' . htmlspecialchars($single["description"]) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}
?>



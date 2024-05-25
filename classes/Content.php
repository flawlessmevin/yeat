<?php
class Content extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function get_biography() {
        $query = $this->db->query("SELECT * FROM biography");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generate_biography($biography) {
        foreach ($biography as $bio) {
            echo '<h3 class="text-center big-h2">' . htmlspecialchars($bio["title"]) . '</h3>';
            echo '<p class="bio">' . htmlspecialchars($bio["text"]) . '</p>';
            echo '</div>';
        }
    }

    public function get_info_table() {
        $query = $this->db->query("SELECT * FROM info_table");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generate_info_table($info_table) {
        echo '<table>';
        foreach ($info_table as $info) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($info["column_name"]) . '</td>';
            echo '<td>' . htmlspecialchars($info["info"]) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    public function get_career() {
        $query = $this->db->query("SELECT * FROM career");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generate_career($career) {
        foreach ($career as $era) {
            echo '<div class="row justify-content-center custom-mb">';
            echo '<div class="col-md-4">';
            echo '<img src="' . htmlspecialchars($era["img"]) . '" style="border: 4px solid black;" alt="">';
            echo '</div>';
            echo '<div class="col-md-4">';
            echo '<button class="accordion">';
            echo '<h3 class="big-h2 glow-text">' . htmlspecialchars($era["title"]) . '</h3>';
            echo '</button>';
            echo '<div class="panel">';
            echo '<p class="small-h3">' . htmlspecialchars($era["text"]) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }

    public function get_music_styles() {
        $query = $this->db->query("SELECT * FROM music_style");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generate_music_styles($music_styles) {
        foreach ($music_styles as $style) {
            echo '<div class="col-md-5">';
            echo '<p class="bio">' . htmlspecialchars($style["text"]) . '</p>';
            echo '</div>';
        }
    }
}
?>

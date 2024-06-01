<?php
class Video extends Database{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_videos()
    {
        $query = $this->db->query("SELECT * FROM videos");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generate_videos($videos)
    {
        foreach ($videos as $video) {
            echo '<div class="row justify-content-around custom-mb">';
            switch ($video["video_id"] % 2) {
                case 1:
                    echo '
                    <div class="col-md-5">
                        <iframe width="560" height="315" src="' . htmlspecialchars($video["youtube_link"]) . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-5">
                        <h2 class="big-h2 glow-text">' . htmlspecialchars($video["title"]) . '</h2>
                        <h3 class="small-h3">' . htmlspecialchars($video["channel"]) . '</h3>
                    </div>';
                    break;
                case 0:
                    echo '
                    <div class="col-md-5">
                        <h2 class="big-h2 glow-text">' . htmlspecialchars($video["title"]) . '</h2>
                        <h3 class="small-h3">' . htmlspecialchars($video["channel"]) . '</h3>
                    </div>
                    <div class="col-md-5">
                        <iframe width="560" height="315" src="' . htmlspecialchars($video["youtube_link"]) . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>';
                    break;
            }
            echo '</div>';
        }
    }
}

?>
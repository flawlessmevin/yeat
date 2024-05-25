<?php
class Concert extends Database{

    public function __construct() {
        parent::__construct();
    }
    function get_concerts(){
        $query = $this->db->query("SELECT * FROM concerts");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function generate_concerts($concerts) {
        foreach ($concerts as $concert) {
            echo '<tr>
                    <td><p class="glow-text">' . htmlspecialchars($concert["date"]) . '</p></td>
                    <td><p class="glow-text">' . htmlspecialchars($concert["venue"]) . '<br><small>' . htmlspecialchars($concert["info"]) . '</small></p></td>
                    <td><p class="glow-text">' . htmlspecialchars($concert["city"]) . '</p></td>
                    <td>
                        <a href="' . htmlspecialchars($concert["tickets"]) . '" class="btn" target="_blank">BUY</a>
                        <a href="' . htmlspecialchars($concert["rsvp"]) . '" class="btn" target="_blank">RSVP</a>
                    </td>
                  </tr>';
        }
    }

}

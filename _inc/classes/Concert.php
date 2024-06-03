<?php
class Concert extends Database
{

    public function __construct()
    {
        parent::__construct();
    }

    function get_concerts()
    {
        $query = $this->db->query("SELECT * FROM concerts");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function generate_concerts($concerts)
    {
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

    // CRUD
    public function get_concert_by_id($concert_id)
    {
        try {
            $sql = "SELECT * FROM concerts WHERE concert_id = :id";
            $query = $this->db->prepare($sql);
            $query->execute([':id' => $concert_id]);
            $concert_data = $query->fetch(PDO::FETCH_ASSOC);
            return $concert_data;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function create_concert($date, $venue, $city, $info, $tickets, $rsvp)
    {
        try {
            $sql = "INSERT INTO concerts (date, venue, city, info, tickets, rsvp) 
                    VALUES (:date, :venue, :city, :info, :tickets, :rsvp)";
            $query = $this->db->prepare($sql);
            $query->execute([
                ':date' => $date,
                ':venue' => $venue,
                ':city' => $city,
                ':info' => $info,
                ':tickets' => $tickets,
                ':rsvp' => $rsvp
            ]);
            return true;
        } catch (PDOException $e) {
            echo "Error creating concert: " . $e->getMessage();
            return false;
        }
    }


    function select_concerts()
    {
        $query = $this->db->query("SELECT * FROM concerts");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function update_concert($concert_id, $new_data)
    {
        try {
            $sql = "UPDATE concerts SET date = :date, venue = :venue, city = :city, info = :info, tickets = :tickets, rsvp = :rsvp WHERE concert_id = :id";
            $query = $this->db->prepare($sql);
            $query->execute([
                ':date' => $new_data['date'],
                ':venue' => $new_data['venue'],
                ':city' => $new_data['city'],
                ':info' => $new_data['info'],
                ':tickets' => $new_data['tickets'],
                ':rsvp' => $new_data['rsvp'],
                ':id' => $concert_id
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function delete_concert($id)
    {
        try {
            $sql = "DELETE FROM concerts WHERE concert_id = :id";
            $query = $this->db->prepare($sql);
            $query->execute([':id' => $id]);
            return true;
        } catch (PDOException $e) {
            echo "Error deleting concert: " . $e->getMessage();
            return false;
        }
    }
}
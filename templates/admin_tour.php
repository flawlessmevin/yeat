<?php

include 'parts/header.php';


?>

<main>
    <div class="rozdel">
        <h2>ADMIN CONCERTS EDIT</h2>
    </div>

    <div class="container-sm mt-5" id="albums">
        <div class="concert-table-container">
            <table class="concert-table">
                <tr>
                    <th>ID</th>
                    <th>DATE</th>
                    <th>VENUE</th>
                    <th>CITY</th>
                    <th>INFO</th>
                    <th>TICKETS</th>
                    <th>RSVP</th>
                    <th>ACTION</th>
                </tr>
                <?php
                $concert = new Concert();
                $concerts = $concert->get_concerts();
                foreach ($concerts as $concert) {
                    echo '<tr>
                            <td>' . htmlspecialchars($concert["concert_id"]) . '</td>
                            <td>' . htmlspecialchars($concert["date"]) . '</td>
                            <td>' . htmlspecialchars($concert["venue"]) . '</td>
                            <td>' . htmlspecialchars($concert["city"]) . '</td>
                            <td>' . htmlspecialchars($concert["info"]) . '</td>
                            <td><a href="' . htmlspecialchars($concert["tickets"]) . '" target="_blank">link</a></td>
                            <td><a href="' . htmlspecialchars($concert["rsvp"]) . '" target="_blank">link</a></td>
                            <td>
                                <a href="edit_concert.php?id=' . $concert["concert_id"] . '">Edit</a> |
                                <a href="delete_concert.php?id=' . $concert["concert_id"] . '">Delete</a>
                            </td>
                          </tr>';
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container-sm mt-5" id="albums">
        <div class="row justify-content-around custom-mb">
            <div class="col-md-5">
                <h2 class="big-h2 glow-text">Add New Concert</h2>
            </div>
            <div class="col-md-4">
                <form action="create_concert.php" method="POST">
                    <label for="date">Date:</label>
                    <input type="text" id="date" name="date" required>

                    <label for="venue">Venue:</label>
                    <input type="text" id="venue" name="venue" required>

                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>

                    <label for="info">Info:</label>
                    <textarea id="info" name="info" rows="4" required></textarea>

                    <label for="tickets">Tickets:</label>
                    <input type="text" id="tickets" name="tickets" required>

                    <label for="rsvp">RSVP:</label>
                    <input type="text" id="rsvp" name="rsvp" required>

                    <button type="submit">Add Concert</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include "parts/footer.php"; ?>

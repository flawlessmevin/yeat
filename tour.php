<?php include "parts/header.php"?>
<main>
    <?php include "parts/banner.php"?>



    <div class="rozdel">
        <h2>LIVE PERFOMANCES</h2>
    </div>
    <div class="container-sm mt-5" id="albums">
        <div class="concert-table-container">
            <table class="concert-table">
                <tr>
                    <th>DATE</th>
                    <th>VENUE</th>
                    <th>CITY</th>
                    <th>TICKETS / RSVP</th>
                 </tr>
                 <?php
                 $concerts = get_concerts();
                 foreach ($concerts as $concert){?>
                <tr>
                    <td><p class="glow-text"><?php echo $concert["date"]?></p></td>
                    <td><p class="glow-text"> <?php echo $concert["venue"]?><br><small><?php echo $concert["info"]?></small></p></td>
                    <td><p class="glow-text" ><?php echo $concert["city"]?></p></td>
                    <td>
                        <a href="<?php echo htmlspecialchars($concert["tickets"]); ?>" class="btn" target="_blank">BUY</a>
                        <a href="<?php echo htmlspecialchars($concert["rsvp"]); ?>" class="btn" target="_blank">RSVP</a>
                    </td>
                </tr>
                <?php }; ?>

            </table>
            <div class="concert-footer">
                <button class="btn">Sign Up To Get Notified</button>
            </div>
        </div>
    </div>

    <div class="container-sm mt-5" id="albums">
        <div class="row justify-content-around custom-mb">
            <div class="col-md-5">
                <h2 class="big-h2 glow-text">
                    Write to us if you have questions or suggestions.
                </h2>

            </div>
            <div class="col-md-4">
                <form id="contactForm" action="process_form.php" method="post" onsubmit="return validateForm()">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <label>
                        <input type="checkbox" id="consent" name="consent" required>
                        I consent to the processing of personal data.
                    </label>

                    <button type="submit">Send</button>
                </form>
                <div id="notification"></div>
            </div>


        </div>
        </div>




</main>


<?php include "parts/footer.php"?>






<?php include "parts/header.php"?>
<main>
    <?php include 'parts/banner.php'?>

    <?php $concert = new Concert()?>
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
                $concerts = $concert->get_concerts();
                $concert->generate_concerts($concerts);
                ?>
            </table>
            <div class="concert-footer">
                <button class="big-h1">Sign Up To Get Notified</button>
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
                <?php
                $form = new Form();
                $form->generate_form();
                ?>
            </div>
        </div>
    </div>
</main>
<?php include "parts/footer.php"?>

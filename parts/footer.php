<footer>
    <div class="container" id="footer-container">
        <div class="row">

            <div class="links-container col-md-4" style="text-align: center;">
                <h3 style="color: white; margin-bottom: 20px;">Links</h3>
                <div class="icon mb-3">

                    <a href="https://www.instagram.com/yeat/" target="_blank">
                        <img src="./img/instagram.png" alt="Instagram"> Instagram
                    </a>
                </div>

                <div class="icon mb-3" style="margin-left: -23px;">
                    <a href="https://open.spotify.com/artist/3qiHUAX7zY4Qnjx8TNUzVx" target="_blank">
                        <img src="./img/spotify.png" alt="Spotify"> Spotify
                    </a>
                </div>
                <div class="icon" style="margin-left: -10px;">
                    <a href="https://www.youtube.com/@yeatmusic3280/featured" target="_blank">
                        <img src="./img/youtube.png" alt="YouTube"> YouTube
                    </a>
                </div>
            </div>


            <div class="contact-container col-md-4" style="text-align: center;">
                <h3 style="color: white; margin-bottom: 20px;">Contact Us</h3>
                <div class="contact-details">
                    <p>Phone: <a href="tel:+17472310628">+1(747)231-0628</a></p>
                    <p>Mngmt: <a href="tel:+13455022093">+1(345)502-2093</a></p>
                    <p>Email: <a href="mailto:yeatmgmt17@gmail.com">yeatmgmt17@gmail.com</a></p>
                    <p>Address: Portland, Oregon, U.S.</p>
                </div>
            </div>


            <div class="navigation-container col-md-4" style="text-align: center;">
                <h3 style="color: white; margin-bottom: 20px;">Navigation</h3>
                <div class="contact-details">
                    <p><a href="home.php">Home</a></p>
                    <p><a href="./music.php">Music</a></p>
                    <p><a href="./video.php">Video</a></p>
                    <p><a href="./tour.php">Tour</a></p>
                </div>
            </div>
        </div>
        <div class="row copyright-row">
            <div class="col-md-12">
                &copy; 2023 Ivan ALisov. All rights reserved.
            </div>
        </div>
    </div>
</footer>


<?php
$page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
$page_object = new Page($page_name);
$page_object->add_scripts();
?>

</html>

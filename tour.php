<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music</title>
  <link rel="icon" href="./img/yeat icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="./img/yeat icon.png " type="image/x-icon">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>

<?php include "parts/header.php"?>

<body>
  <header class="banner">
    <div class="logo">
      <a href="index.php">
        <img src="./img/yeat-twizzy gif.gif" height="40">
      </a>
    </div>
    <nav class="navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="tour.php">Tour</a></li>
      </ul>
      <a class="hamburger" id="hamburger">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>
  <main>
    <div class="image-container">
      <img src="./img/yeat 4 full width.jpg" alt="Full Width Image">
      <div class="text-overlay">
        <p class="glow-text" style="font-size: 150px;">CONCERTS</p>
      </div>
    </div>


    <div class="rozdel">
      <h2>LIVE PERFOMANCES</h2>
    </div>



    <section class="slides-container">
      <div class="slide fade">
        <img src="./img/yeat4.jpeg" style="max-width: 1500px; max-height: 1000px;">
        <div class="slide-text">
          New York
        </div>
      </div>
      <div class="slide fade">
        <img src="./img/live yeat2.jpg" style="max-width: 1500px; max-height: 1000px;">
        <div class="slide-text">
          California
        </div>
      </div>
      <div class="slide fade">
        <img src="./img/live yeat3.jpg">
        <div class="slide-text">
          London
        </div>
      </div>
      <a id="prev" class="prev">❮</a>
      <a id="next" class="next">❯</a>
    </section>



    <div class="container-sm mt-5" id="albums">
      <div class="row justify-content-around custom-mb">
        <div class="col-md-5">
          <h2 class="big-h2 glow-text">
            There are no events in the near future. Sign up to receive information.
          </h2>

        </div>
        <div class="col-md-5">
          <form id="contactForm" onsubmit="return validateForm()">
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

            <button type="submit"><a href="https://en.wikipedia.org/wiki/Yeat"></a>Send</button>
          </form>

        </div>
      </div>




  </main>


  <?php include "parts/footer.php"?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="./js/app.js"></script>
  <script src="./js/hamb.js"></script>
</body>

</html>
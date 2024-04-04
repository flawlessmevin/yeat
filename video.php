<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video</title>
  <link rel="icon" href="./img/yeat icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="./img/yeat icon.png " type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>





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
      <img src="./img/yeat 1 full width.jpg" alt="Full Width Image">
      <div class="text-overlay">
        <p class="glow-text" style="font-size: 150px;">VIDEO</p>
      </div>
    </div>
    <div class="rozdel">
      <h2>INTERVIEWS</h2>
    </div>

    <div class="container-sm mt-5" id="albums">
      <div class="row justify-content-around custom-mb">
        <div class="col-md-5">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ZxtXNfPH-Ac?si=tXK8jPywo7sD1Ogj"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>

        <div class="col-md-5">
          <h2 class="big-h2 glow-text">Yeat Interview</h2>
          <h3 class="small-h3">Channel 5 Clips</h3>

        </div>
      </div>

      <div class="row justify-content-around custom-mb ">
        <div class="col-md-5">
          <h2 class="big-h2 glow-text">Yeat Names His GOATs: Album, Rapper, Food & More | GOAT Talk With Complex</h2>
          <h3 class="small-h3">Complex</h3>

        </div>
        <div class="col-md-5">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/J3H8k1vrDoA?si=IwbfcE-jabtn0NC0"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>
      <div class="row justify-content-around custom-mb">
        <div class="col-md-5">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/FJFgIUYBDO4?si=U8oVjvB_FMNMJMei"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>

        <div class="col-md-5">
          <h2 class="big-h2 glow-text">Yeat Pulls Up to Icebox with Ken Carson, Destroy Lonely & SeptembersRich!</h2>
          <h3 class="small-h3">Icebox</h3>

        </div>
      </div>

    </div>

    <div class="rozdel">
      <h2>Behind the Scenes</h2>
    </div>

    <div class="container-sm mt-5" id="albums">
      <div class="row justify-content-around custom-mb">
        <div class="col-md-5">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/w-VxqSCR-JE?si=JiLs5O8fFDaROxA5"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>

        <div class="col-md-5">
          <h2 class="big-h2 glow-text">Behind the Scenes of Yeat's "Bigger Thën Everything" Music Video</h2>
          <h3 class="small-h3">Lyrical Lemonade 2
          </h3>

        </div>
      </div>
    </div>










  </main>

  <?php include "parts/footer.php"?>

  <script src="js/app.js"></script>
  <script src="./js/hamb.js"></script>
</body>

</html>
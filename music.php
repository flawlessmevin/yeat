<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music</title>
  <link rel="icon" href="./img/yeat icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="./img/yeat icon.png " type="image/x-icon">

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>

<?php include "parts/header.php"?>




  <main>
      <?php include "parts/banner.php"?>

    <div class="rozdel">
      <h2>Albums</h2>
    </div>

      <?php
      $albums = get_albums();
      foreach ($albums as $album){?>
      <div class="container-sm mt-5" id="albums">
          <div class="row justify-content-around custom-mb">
              <div class="col-md-5">
                  <iframe class="spotify-player"
                          src="<?php echo $album["spotify_link"]?>" width="100%"
                          height="352" frameBorder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
              </div>
              <div class="col-md-5">
                  <h2 class="big-h2 glow-text"><?php echo $album["title"]?></h2>
                  <h3 class="small-h3"><?php echo $album["date"]?></h3>
                  <p class="small-p"><?php echo $album["description"]?></p>
              </div>
          </div>
      </div>
          <?php }; ?>


    <div class="rozdel">
      <h2>Singles</h2>
    </div>
      <?php

      $singles = get_singles();
      foreach ($singles as $single){?>
          <div class="container-sm mt-5" id="albums">
              <div class="row justify-content-around custom-mb">
                  <div class="col-md-5">
                      <iframe class="spotify-player"
                              src="<?php echo $single["spotify_link"]?>" width="100%"
                              height="352" frameBorder="0" allowfullscreen=""
                              allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                  </div>
                  <div class="col-md-5">
                      <h2 class="big-h2 glow-text"><?php echo $single["title"]?></h2>
                      <h3 class="small-h3"><?php echo $single["date"]?></h3>
                      <p class="small-p"><?php echo $single["description"]?></p>
                  </div>
              </div>
          </div>

      <?php }; ?>


  </main>


  <?php include "parts/footer.php"?>
  <script defer src="https://sdk.scdn.co/spotify-player.js"></script>
  <script src=".js/app.js"></script>
  <script src="./js/hamb.js"></script>


</html>
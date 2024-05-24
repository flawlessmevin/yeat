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



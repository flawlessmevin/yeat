<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yeat</title>
	<link rel="icon" href="./img/yeat icon.png" type="image/x-icon">
	<link rel="shortcut icon" href="./img/yeat icon.png " type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>

<?php include "parts/header.php"?>
<main>
<?php include "parts/banner.php"?>





	<!-- BLOCK 1 -->
	<div class="rozdel">
		<h2>BIOGRAPHY</h2>
    </div>
	<div class="container-sm mt-5 bot-mar">
		<div class="row justify-content-around ">
			<div class="col-md-5">
				<h3 class="text-center big-h2">Early life</h3>
				<p class="bio">
					Noah Olivier Smith was born on February 26, 2000, in Irvine,
					California to a Romanian mother and an American father. He has two
					brothers. His paternal grandmother is Mexican and from the city of
					Tijuana while his grandfather is of British descent. Yeat spent his
					early childhood in Fullerton, California before he and his family
					moved to Portland, Oregon, where he attended Lakeridge High School.
					After finishing high school, Yeat moved to the Los Angeles area in
					pursuit of a music career.
				</p>
			</div>
			<div class="col-md-5">
				<h3 class="text-center big-h2">Background information</h3>
				<table>
                    <?php
                    $info_table = get_info_table();
                    foreach ($info_table as $info){?>
                        <tr>
						    <td><?php echo $info["column_name"]?></td>
						    <td><?php echo $info["info"]?></td>
					    </tr>
                    <?php }; ?>
				</table>
			</div>
		</div>
	</div>


	<!-- BLOCK 2 -->
	<div class="rozdel">
		<h2>Career</h2>
	</div>

    <div class="container-sm mt-5">
        <?php
        $carer = get_career();
        foreach ($carer as $era){?>
            <div class="row justify-content-center custom-mb ">
			    <div class="col-md-4">
				    <img src="<?php echo $era["img"]?>" style="border: 4px solid black; " alt="">
                </div>
			    <div class="col-md-4 ">
				    <button class="accordion">
					    <h3 class="big-h2 glow-text"><?php echo $era["title"]?></h3>
				    </button>
				    <div class="panel">
					    <p class="small-h3"><?php echo $era["text"]?></p>
				    </div>
			    </div>
		    </div>
        <?php }; ?>

	</div>

	<!-- BLOCK 3 -->
	<div class="rozdel">
		<h2>Music Style</h2>
	</div>

    <div class="container-sm mt-5 bot-mar">
        <div class="row justify-content-around ">
            <?php
            $music_styles = get_music_styles();
            foreach ($music_styles as $style){?>
                <div class="col-md-5">
                    <p class="bio"><?php echo $style["text"]?></p>
                </div>
            <?php }; ?>
        </div>
    </div>

</main>


<?php include "parts/footer.php"?>










<script src="./js/hamb.js"></script>
<script src="./js/app.js"></script>
</body>

</html>
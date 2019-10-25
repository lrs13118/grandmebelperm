<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<?php
		$id = $_GET['id'];
		$article = mysqli_query ($connection, "SELECT * FROM articles WHERE id = ". $_GET['id'] ." ");
		$articl = mysqli_fetch_assoc ($article) 
	?>
	<title><?php if ($id != 1 ) echo $articl['title']; ?> <?php if ($id != 1 ) echo '|'; ?> Наши заметки | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="">
	<meta name="description" content="">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/files-style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
	<header>
		<?php 
			include "header.php";
		?>
	</header>
	<?php 
		include "nav.php";
	?>
	<main>
		<div class="bread_crumbs">
			<?php
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 4');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
				<?php
				$id = $_GET['id'];
				$article = mysqli_query ($connection, "SELECT * FROM articles WHERE id = ". $_GET['id'] ." ");
				if ($id != 1)  { $articl = mysqli_fetch_assoc ($article) 
				?>
				<li>></li>
				<li><a href=<?php echo $articl['']; ?>><?php echo $articl['title']; ?></a></li><?php } ?>
			</ul>
			<?php } ?>
		</div>
		<div class="articles_container">
			<?php
				$id = $_GET['id'];
				$article = mysqli_query ($connection, "SELECT * FROM articles WHERE id = ". $_GET['id'] ." ");
				$articl = mysqli_fetch_assoc ($article)
			?>
			<h2 align="center"><?php echo $articl['title']; ?></h2><br>
			
			<?php
				$id = $_GET['id'];
				$article = mysqli_query ($connection, "SELECT * FROM articles ORDER BY id ");
				if ($id == 1) { while ($articl = mysqli_fetch_assoc ($article)) { ?> 
			<ul>
				<?php if ($articl['id'] != 1) { ?>
				<li><a href=articles.php?id=<?php echo $articl['id']; ?>><?php echo $articl['title']; ?></a></li><?php } ?>
			</ul><?php } ?><?php } ?>
			
			<?php
				$id = $_GET['id'];
				$article = mysqli_query ($connection, "SELECT * FROM articles WHERE id = ". $_GET['id'] ." ");
				$articl = mysqli_fetch_assoc ($article)
			?>

			<div class="articles_description">
				<p><?php echo $articl['description']; ?></p>
			</div>

			<?php if ( $articl['img_f1'] != null ) { ?>
			<div class="articles_img_flex">
				<?php if ( $articl['img_f1'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_f1']; ?>>
					<p align="center"><?php echo $articl['desc_f1']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f2'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_f2']; ?>>
					<p align="center"><?php echo $articl['desc_f2']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f3'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_f3']; ?>>
					<p align="center"><?php echo $articl['desc_f3']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f4'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_f4']; ?>>
					<p align="center"><?php echo $articl['desc_f4']; ?></p>
				</div><?php } ?>
			</div><?php } ?>
			
			<?php if ( $articl['img_b1'] != null ) { ?>
			<div class="articles_img_block">
				<?php if ( $articl['img_b1'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_b1']; ?>>
					<p align="center"><?php echo $articl['desc_b1']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b2'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_b2']; ?>>
					<p align="center"><?php echo $articl['desc_b2']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b3'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_b3']; ?>>
					<p align="center"><?php echo $articl['desc_b3']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b4'] != null ) { ?>
				<div class=<?php echo $articl['class1']; ?>>
					<img src=img/articles/<?php echo $articl['img_b4']; ?>>
					<p align="center"><?php echo $articl['desc_b4']; ?></p>
				</div><?php } ?>
			</div><?php } ?>

			<div class="articles_description">
				<p><?php echo $articl['description1']; ?></p>
			</div>

			<?php if ( $articl['img_f5'] != null ) { ?>
			<div class="articles_img_flex">
				<?php if ( $articl['img_f5'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_f5']; ?>>
					<p align="center"><?php echo $articl['desc_f5']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f6'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_f6']; ?>>
					<p align="center"><?php echo $articl['desc_f6']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f7'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_f7']; ?>>
					<p align="center"><?php echo $articl['desc_f7']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f8'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_f8']; ?>>
					<p align="center"><?php echo $articl['desc_f8']; ?></p>
				</div><?php } ?>
			</div><?php } ?>
			
			<?php if ( $articl['img_b5'] != null ) { ?>
			<div class="articles_img_block">
				<?php if ( $articl['img_b5'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_b5']; ?>>
					<p align="center"><?php echo $articl['desc_b5']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b6'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_b6']; ?>>
					<p align="center"><?php echo $articl['desc_b6']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b7'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_b7']; ?>>
					<p align="center"><?php echo $articl['desc_b7']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b8'] != null ) { ?>
				<div class=<?php echo $articl['class2']; ?>>
					<img src=img/articles/<?php echo $articl['img_b8']; ?>>
					<p align="center"><?php echo $articl['desc_b8']; ?></p>
				</div><?php } ?>
			</div><?php } ?>

			<div class="articles_description">
				<p><?php echo $articl['description2']; ?></p>
			</div>

			<?php if ( $articl['img_f9'] != null ) { ?>
			<div class="articles_img_flex">
				<?php if ( $articl['img_f9'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_f9']; ?>>
					<p align="center"><?php echo $articl['desc_f9']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f10'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_f10']; ?>>
					<p align="center"><?php echo $articl['desc_f10']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f11'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_f11']; ?>>
					<p align="center"><?php echo $articl['desc_f11']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f12'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_f12']; ?>>
					<p align="center"><?php echo $articl['desc_f12']; ?></p>
				</div><?php } ?>
			</div><?php } ?>
			
			<?php if ( $articl['img_b9'] != null ) { ?>
			<div class="articles_img_block">
				<?php if ( $articl['img_b9'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_b9']; ?>>
					<p align="center"><?php echo $articl['desc_b9']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b10'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_b10']; ?>>
					<p align="center"><?php echo $articl['desc_b10']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b11'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_b11']; ?>>
					<p align="center"><?php echo $articl['desc_b11']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b12'] != null ) { ?>
				<div class=<?php echo $articl['class3']; ?>>
					<img src=img/articles/<?php echo $articl['img_b12']; ?>>
					<p align="center"><?php echo $articl['desc_b12']; ?></p>
				</div><?php } ?>
			</div><?php } ?>

			<div class="articles_description">
				<p><?php echo $articl['description3']; ?></p>
			</div>

			<?php if ( $articl['img_f13'] != null ) { ?>
			<div class="articles_img_flex">
				<?php if ( $articl['img_f13'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_f13']; ?>>
					<p align="center"><?php echo $articl['desc_f13']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f14'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_f14']; ?>>
					<p align="center"><?php echo $articl['desc_f14']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f15'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_f15']; ?>>
					<p align="center"><?php echo $articl['desc_f15']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f16'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_f16']; ?>>
					<p align="center"><?php echo $articl['desc_f16']; ?></p>
				</div><?php } ?>
			</div><?php } ?>
			
			<?php if ( $articl['img_b13'] != null ) { ?>
			<div class="articles_img_block">
				<?php if ( $articl['img_b13'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_b13']; ?>>
					<p align="center"><?php echo $articl['desc_b13']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b14'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_b14']; ?>>
					<p align="center"><?php echo $articl['desc_b14']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b15'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_b15']; ?>>
					<p align="center"><?php echo $articl['desc_b15']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b16'] != null ) { ?>
				<div class=<?php echo $articl['class4']; ?>>
					<img src=img/articles/<?php echo $articl['img_b16']; ?>>
					<p align="center"><?php echo $articl['desc_b16']; ?></p>
				</div><?php } ?>
			</div><?php } ?>

			<div class="articles_description">
				<p><?php echo $articl['description4']; ?></p>
			</div>

			<?php if ( $articl['img_f17'] != null ) { ?>
			<div class="articles_img_flex">
				<?php if ( $articl['img_f17'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_f17']; ?>>
					<p align="center"><?php echo $articl['desc_f17']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f18'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_f18']; ?>>
					<p align="center"><?php echo $articl['desc_f18']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f19'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_f19']; ?>>
					<p align="center"><?php echo $articl['desc_f19']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_f20'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_f20']; ?>>
					<p align="center"><?php echo $articl['desc_f20']; ?></p>
				</div><?php } ?>
			</div><?php } ?>
			
			<?php if ( $articl['img_b17'] != null ) { ?>
			<div class="articles_img_block">
				<?php if ( $articl['img_b17'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_b17']; ?>>
					<p align="center"><?php echo $articl['desc_b17']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b18'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_b18']; ?>>
					<p align="center"><?php echo $articl['desc_b18']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b19'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_b19']; ?>>
					<p align="center"><?php echo $articl['desc_b19']; ?></p>
				</div><?php } ?>
				<?php if ( $articl['img_b20'] != null ) { ?>
				<div class=<?php echo $articl['class5']; ?>>
					<img src=img/articles/<?php echo $articl['img_b20']; ?>>
					<p align="center"><?php echo $articl['desc_b20']; ?></p>
				</div><?php } ?>
			</div><?php } ?>

			<div class="articles_description">
				<p><?php echo $articl['description5']; ?></p>
			</div>

		</div>
<script>
  window.onload = function() {
  };
</script>
	</main>
	<div><a href="#" class="button_up"><img src="img/button_up.png"></a></div>
	<footer>
		<?php 
			include "footer.php";
		?>
	</footer>
</body>
<script src="script.js" type="text/javascript"></script>
</html>
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
		$product = mysqli_query ($connection, "SELECT * FROM products WHERE id = ". $_GET['id'] ." ");
		$prod = mysqli_fetch_assoc($product);	
	?>
	<title><?php echo $prod['title']; ?> | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="">
	<meta name="description" content=<?php echo $config['description']; ?>>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/files-style.css">
	<link rel="stylesheet" type="text/css" href="slider/slider.css">
	<script src="slider/slider.js"></script>
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
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<?php 
				$id = $_GET['id'];
				$result = mysqli_query ($connection, "SELECT * FROM products WHERE id = ". $_GET['id'] ." ");
				$r = mysqli_fetch_assoc ($result);
				$product = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $r['main_cat'] ." ");
				$r1 = mysqli_fetch_assoc ($product)
				?>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['main']; ?></a></li>
				<li>></li>
				<?php
				$id = $_GET['id'];
				$result = mysqli_query ($connection, "SELECT * FROM products WHERE id = ". $_GET['id'] ." ");
				$r = mysqli_fetch_assoc ($result);
				$product = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $r['cat'] ." ");
				$r1 = mysqli_fetch_assoc ($product)
				?>
				<li><a href=container.php?id=<?php echo $r1['id']; ?>><?php echo $r1['title']; ?></a></li>
				<li>></li>
				<?php
				$id = $_GET['id'];
				$result = mysqli_query ($connection, "SELECT * FROM products WHERE id = ". $_GET['id'] ." ");
				$r = mysqli_fetch_assoc ($result);
				$product = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $r['pod_cat'] ." ");
				$r1 = mysqli_fetch_assoc ($product)
				?>
				<li><a href=container.php?id=<?php echo $r1['cat']; ?>><?php echo $r1['title']; ?></a></li>
				<li>></li>
				<?php 
				$id = $_GET['id'];
				$product = mysqli_query ($connection, "SELECT * FROM products WHERE id = ". $_GET['id'] ." ");
				$prod = mysqli_fetch_assoc($product);
				?>
				<li><a href=""><?php echo $prod['title']; ?></a></li>
			</ul>
		</div>
		<div class="block">
			<div class="block_block">
				<div class="block_img">
					<?php 
						if ($prod['sale_price'] != 0) { ?>
						<div class="sale_icon"><a href="sale.php"><img src="img/sale_icon.png" width="30%"></a></div><?php ; } 
					?>
					<img src=img/prod_photo/<?php if ($prod['img'] != null) { echo $prod['img']; } else echo 'kot.jpg'; ?>>
				</div>
				<div class="block_description">
					<h2><?php echo $prod['title']; ?></h2>

					<p class="old_price"><?php if ($prod['old_price'] != 0) { echo $prod['old_price']; } ?></p>
					<?php if ($prod['price'] != 0) { ?>
					<p class="price">от <span><?php echo $prod['price']; ?></span> руб.<?php } ?> <?php if ($prod['note'] != null) {echo $prod['note']; ?></p><?php } ?>
					<p><span id="unknowing_price"><?php if ($prod['price'] == 0 and $prod['sale_price'] == 0) { echo 'Цену уточняйте' ?></span></p> <?php } ?>
					<p class="price"><span><?php if ($prod['old_price'] != 0) { echo $prod['sale_price']; ?></span> руб.</p> <?php } ?>

					<h3>Описание:</h3>
					<p>
						<?php if ($prod['description'] != null) { echo $prod['description']; } ?>
					</p>
					<p>
						<a href="articles.php?id=3" target="_blank" title="Советуем прочитать нашу статью о раскладных механизмах!"><?php if ($prod['folding_mechanism'] != null) { echo 'Раскладной механизм '; }{ echo $prod['folding_mechanism']; } ?></a>
						<?php if ($prod['filling'] != null) { echo $prod['filling']; } ?>
						<?php if ($prod['metal_frame'] != 0) { echo 'металлокаркас, '; } ?>
						<?php if ($prod['removable_case'] != 0) { echo 'съемный чехол, '; } ?>
						<?php if ($prod['angle_universal'] != 0) { echo 'угол универсальный, '; } ?>
						<?php if ($prod['niche_under_taundry'] != 0) { echo 'ниша под белье, '; } ?>
						<?php if ($prod['wallpaper_protection'] != 0) { echo 'защита для обоев, '; } ?>
						<?php if ($prod['adjustable_headrests'] != 0) { echo 'регулируемые подголовники, '; } ?>
						<?php if ($prod['backrest_positions'] != 0) { echo 'три положения спинки, '; } ?>
						<?php if ($prod['additionally'] != null) { echo $prod['additionally']; } ?>
					</p>

					<hr>
					<p>Производитель: <?php if ($prod['maker'] != 'МИФ') { ?><?php echo $prod['maker']; } ?></p>
					<p>Общие размеры: <?php if ($prod['height'] != null) { echo $prod['height']; } ?><?php if ($prod['width'] != null) {echo $prod['width']; } ?><?php if ($prod['depth'] != null) { echo $prod['depth']; } ?>

						
						<?php if ($prod['tag_for_kd'] != 0) { ?>
						<div>
							<p><b>1,6</b> м - <b><?php echo $prod['price0']; ?></b> руб.</p>
							<p><b>1,7</b> м - <b><?php echo $prod['price1']; ?></b> руб.</p>
							<p><b>1,8</b> м - <b><?php echo $prod['price2']; ?></b> руб.</p>
							<p><b>2,0</b> м - <b><?php echo $prod['price3']; ?></b> руб.</p>
						</div>
						<!--<div class="nok">
							<div class="kd_block">
								<input type="checkbox" id="kp1" class="hide">
								<label for="kp1" class="kit_dim">1,6 м.</label>
								<div class="kit_pri"><?php echo $prod['price']; ?> руб.</div>
							</div>
							<div class="kd_block">
								<input type="checkbox" id="kp2" class="hide">
								<label for="kp2" class="kit_dim">1,7 м.</label>
								<div class="kit_pri"><?php echo $prod['price1']; ?> руб.</div>
							</div>
							<div class="kd_block">
								<input type="checkbox" id="kp3" class="hide">
								<label for="kp3" class="kit_dim">1,8 м.</label>
								<div class="kit_pri"><?php echo $prod['price2']; ?> руб.</div>
							</div>
							<div class="kd_block">
								<input type="checkbox" id="kp4" class="hide">
								<label for="kp4" class="kit_dim">2 м.</label>
								<div class="kit_pri"><?php echo $prod['price3']; ?> руб.</div>
							</div>	
						</div>--><?php } ?>
					<br><?php if ($prod['other_dimensions'] != null) { echo $prod['other_dimensions']; } ?></p>

					<hr>
					<div class="tips">
						<?php if ($prod['cat'] == 3 or $prod['cat'] == 4) { ?>
						<a href="articles.php?id=2" target="_blank" title="Советуем прочитать нашу статью о конфигурации мягкой мебели!">
							<div class="tip_for_article">
								<p><?php echo 'Практически все модели угловых диванов можно сделать прямыми, а прямые диваны сделать угловыми. Так же к любому дивану можно заказать соответствующее кресло.'; ?></p>
							</div>
						</a><?php } ?>
						<?php if ($prod['categories'] == 2) { ?>
						<a href="articles.php?id=4" target="_blank" title="Советуем прочитать нашу статью о видах мебельных тканей, используемых в нашем салоне!">
							<div class="tip_for_article">
								<p> <?php echo'Ткань для обивки можно выбрать любого цвета и материала, подходящих под ваш интерьер!'; ?></p>
							</div>
						</a><?php } ?>
						<?php if ($prod['cat'] == 30) { ?>
						<a href="articles.php?id=5" target="_blank">
							<div class="tip_for_article">
								<p> <?php echo'Так же у нас в продаже имеются матрасы!'; ?></p>
							</div>
						</a><?php } ?>
						<?php if ($prod['cat'] == 10) { ?>
						<a href="articles.php?id=6" target="_blank" title="Кликните, чтоб посмотреть стеновые палели!">
							<div class="tip_for_article">
								<p> <?php echo'Можем предложить стеновые панели на любой вкус!'; ?></p>
							</div>
						</a><?php } ?>
						<?php if ($prod['cat'] == 10) { ?>
						<a href="articles.php?id=7" target="_blank" title="Кликните, чтоб посмотреть информацию о мойках!">
							<div class="tip_for_article">
								<p> <?php echo'Так же в наличии имеются мойки!'; ?></p>
							</div>
						</a><?php } ?>
					</div>
				</div>
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
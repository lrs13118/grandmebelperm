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
		$result = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $_GET['id'] ." ");
		while ($r1 = mysqli_fetch_assoc ($result)) {
	?>
	<title><?php echo $r1['title']; ?><?php } ?> | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="">
	<meta name="description" content="Мягкая мебель в любом стиле, цветовой гамме, ценновой категории и преимущественно пермских производителей. А так же шкафы-купе, кухни и другая корпусная мебель.">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/files-style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
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
					$bc = $_GET['id'];
					$result = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $_GET['id'] ." ");
					while ($r1 = mysqli_fetch_assoc ($result)) { ?>
				<li><a href=container.php?id=<?php echo $r1['main_id']; ?>><?php echo $r1['main']; ?></a></li><?php } ?>
				<?php
					$bc = $_GET['id'];
					$result = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $_GET['id'] ." ");
					while ($r1 = mysqli_fetch_assoc ($result)) { ?>
				<li>></li>
				<li><a href=container.php?id=<?php echo $r1['title_id']; ?>><?php echo $r1['title_for_bc']; ?></a></li><?php } ?>
				<?php
					$bc = $_GET['id'];
					$result = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $_GET['id'] ." ");
					while ($r1 = mysqli_fetch_assoc ($result)) { ?>
				<li>></li>
				<li><a href=container.php?id=<?php echo $r1['id']; ?>><?php echo $r1['pod_title_for_bc']; ?></a></li><?php } ?>
			</ul>
		</div>


		<div class="container_container">
			<div class="container_nav">
			<?php 
				$nav = $_GET['id'];
				$result = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $_GET['id'] ." ");
				$r = mysqli_fetch_assoc ($result);
				$menu = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE categories = ". $r['main_id'] ." ");
				while ($mm = mysqli_fetch_assoc ($menu)) {
				?>
			
				<ul>				
					<a href=container.php?id=<?php echo $mm['id']; ?>><li><em class="fa fa-puzzle-piece"> <?php echo $mm['title']; ?></em></li></a>
				</ul><?php } ?>
			</div>

			<div class="container_pod_nav_blocks_container">
			
				<div class="product_amount">
					
				</div>

			<div class="pod_nav_container">
			<?php 
				$pod_nav = $_GET['id'];
				if ($pod_nav == 20 or 25 or 30 or 34) {
				$res = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $pod_nav ." ");
				$r0 = mysqli_fetch_assoc ($res);
				$p_me = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE pod_cat = ". $r0['id'] ." ");
				while ($m0 = mysqli_fetch_assoc ($p_me)) {
				?>
				<ul>
					<a href=container.php?id=<?php echo $m0['id']; ?>><li><?php echo $m0['title']; ?></li></a>
				</ul><?php } ?><?php } ?>
			</div>

			<div class="pod_nav_container">
			<?php 
				$pod_pod_nav = $_GET['id'];
				if ($pod_nav == 21 or 22 or 23 or 24 or 26 or 27 or 28 or 29 or 31 or 32 or 35 or 36) {
				$res = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE id = ". $pod_pod_nav ." ");
				$r0 = mysqli_fetch_assoc ($res);
				if ($r0['pod_title_for_bc'] != null) {
				$p_me = mysqli_query ($connection, "SELECT * FROM prod_categories WHERE pod_cat = ". $r0['title_id'] ." ");
				while ($m0 = mysqli_fetch_assoc ($p_me)) {
				?>
				<ul>
					<a href=container.php?id=<?php echo $m0['id']; ?>><li><?php echo $m0['title']; ?></li></a>
				</ul><?php } ?><?php } ?><?php } ?>
			</div>

			<div class="container_blocks_container">
				<?php
					$id = $_GET['id'];
					if ($id = 2 or 9 or 15) {
					$product = mysqli_query ($connection, "SELECT * FROM products WHERE main_cat = ". $_GET['id'] ." ORDER BY sale_price DESC, price DESC " );
					while ($prod = mysqli_fetch_assoc ($product)) { ?>
				<div class="container_block">
					
					<?php 
						if ($prod['sale_price'] != 0) { ?>
						<div class="sale_icon"><a href="sale.php"><img src="img/sale_icon.png" width="20%"></a></div><?php ; } 
					?>
					<a href=block.php?id=<?php echo $prod['id']; ?>>
						<img src=img/prod_photo/<?php if ($prod['img'] != null) { echo $prod['img']; } else echo 'kot.jpg' ?>>
						<p><?php echo $prod['title']; ?></p>
						<hr>
						<p><?php echo $prod['preview']; ?></p>
						<hr>
						<p align="center" class="old_price"><?php if ($prod['old_price'] != 0) { echo $prod['old_price']; } ?></p>

						<?php if ($prod['price'] != 0) { ?>
						<p align="center">от <span><?php echo $prod['price']; ?></span> руб.</p><?php } ?>

						<p align="center"><span><?php if ($prod['price'] == 0 and $prod['sale_price'] == 0) { echo 'Цену уточняйте' ?></span></p> <?php } ?>

						<p align="center"><span><?php if ($prod['old_price'] != 0) { echo $prod['sale_price']; ?></span> руб.</p> <?php } ?>
					</a>	
				</div>
				<?php } $rows = mysqli_num_rows($product); ?>
				<?php } ?>
				<?php
					$id = $_GET['id'];
					if ($id = 3 or 4 or 5 or 6 or 7 or 8 or 10 or 11 or 12 or 13 or 16 or 17 or 18 or 19 or 20 or 25 or 30 or 33 or 34 or 37 or 38 or 39 or 40) {
					$product = mysqli_query ($connection, "SELECT * FROM products WHERE cat = ". $_GET['id'] ." ORDER BY sale_price DESC, price DESC " );
					while ($prod = mysqli_fetch_assoc ($product)) {
				?>
				<div class="container_block">
					
					<?php 
						if ($prod['sale_price'] != 0) { ?>
						<div class="sale_icon"><a href="sale.php"><img src="img/sale_icon.png" width="20%"></a></div><?php ; } 
					?>
					<a href=block.php?id=<?php echo $prod['id']; ?>>
						<img src=img/prod_photo/<?php if ($prod['img'] != null) { echo $prod['img']; } else echo 'kot.jpg' ?>>
						<p><?php echo $prod['title']; ?></p>
						<hr>
						<p><?php echo $prod['preview']; ?></p>
						<hr>
						<p align="center" class="old_price"><?php if ($prod['old_price'] != 0) { echo $prod['old_price']; } ?></p>

						<?php if ($prod['price'] != 0) { ?>
						<p align="center">от <span><?php echo $prod['price']; ?></span> руб.</p><?php } ?>

						<p align="center"><span><?php if ($prod['price'] == 0 and $prod['sale_price'] == 0) { echo 'Цену уточняйте' ?></span></p> <?php } ?>

						<p align="center"><span><?php if ($prod['old_price'] != 0) { echo $prod['sale_price']; ?></span> руб.</p> <?php } ?>
					</a>	
				</div>
				<?php } ?><?php } ?>
				<?php
					$id = $_GET['id'];
					if ($id == 21 or 22 or 23 or 24 or 26 or 27 or 28 or 29 or 31 or 32 or 35 or 36) {
					$product = mysqli_query ($connection, "SELECT * FROM products WHERE pod_cat = ". $_GET['id'] ." ORDER BY price DESC " );
					while ($prod = mysqli_fetch_assoc ($product)) {
				?>
				<div class="container_block">
					
					<?php 
						if ($prod['sale_price'] != 0) { ?>
						<div class="sale_icon"><a href="sale.php"><img src="img/sale_icon.png" width="20%"></a></div><?php ; } 
					?>
					<a href=block.php?id=<?php echo $prod['id']; ?>>
						<img src=img/prod_photo/<?php if ($prod['img'] != null) { echo $prod['img']; } else echo 'kot.jpg' ?>>
						<p><?php echo $prod['title']; ?></p>
						<hr>
						<p><?php echo $prod['preview']; ?></p>
						<hr>
						<p align="center" class="old_price"><?php if ($prod['old_price'] != 0) { echo $prod['old_price']; } ?></p>

						<?php if ($prod['price'] != 0) { ?>
						<p align="center">от <span><?php echo $prod['price']; ?></span> руб.</p><?php } ?>

						<p align="center"><span><?php if ($prod['price'] == 0 and $prod['sale_price'] == 0) { echo 'Цену уточняйте' ?></span></p> <?php } ?>

						<p align="center"><span><?php if ($prod['old_price'] != 0) { echo $prod['sale_price']; ?></span> руб.</p> <?php } ?>
					</a>	
				</div>
				<?php } ?><?php } ?>
			</div>
			</div>
		</div>

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
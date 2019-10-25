<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Sale | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="sale, скидка">
	<meta name="description" content=<?php echo $config['description']; ?>>
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
				$result = mysqli_query ($connection, 'SELECT * FROM product_nav WHERE id = 1');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="sale_blocks_container">
				<?php
					$product = mysqli_query ($connection, "SELECT * FROM products WHERE sale_price != 0 ORDER BY id DESC");
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

						<p align="center"><span><?php if ($prod['price'] == 0 and $prod['sale_price'] == 0) { echo 'Цену уточняйте' ?></span></p> <?php } ?>

						<p align="center"><span><?php if ($prod['old_price'] != 0) { echo $prod['sale_price']; ?></span> руб.</p> <?php } ?>
					</a>	
				</div>
				<?php } ?>
			</div>
		<script>window.onload = function() {}; </script>
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
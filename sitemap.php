<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Карта сайта | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="карта, сайт, мебель">
	<meta name="description" content="Мягкая мебель в любом стиле, цветовой гамме, ценновой категории и преимущественно пермских производителей. А так же шкафы-купе, кухни и другая корпусная мебель.">
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
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 6');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/" target="_blank">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?> target="_blank"><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="citemap">
			<h2 class="section_name">Карта сайта</h2>
			<ol>
				<li><a href="/" target="_blank">Главная</a></li>
			<!--header navy without citemap-->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM header_nav');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=<?php echo $r1['href']; ?> target="_blank"><?php echo $r1['title']; ?></a></li><?php } ?>

			<!--procuct navy  - SALE -->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 1');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=<?php echo $r1['href']; ?> target="_blank"><?php echo $r1['title']; ?></a></li><?php } ?>

			<!--navy  - SPECIAL OFFERS -->
				
				<li><a href="special-offers.php" target="_blank">Мебель по индивидуальным заказам</a></li>
				
			<!--procuct navy - CUSHIONED FURNITURE-->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 2');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=container.php?id=<?php echo $r1['id']; ?> target="_blank" ><?php echo $r1['main']; ?></a></li>

				<!--procuct navy - cushioned furniture - sofas-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 3');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank" ><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 3 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - cushioned furniture - corner sofas-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 4');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 4 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - cushioned furniture - modular sofas-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 5');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 5 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - cushioned furniture - sets-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 6');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 6 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - cushioned furniture - armchairs -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 7');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 7 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>
					
				<!--procuct navy - cushioned furniture - poofs-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 8');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 8 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				</li>
				<?php } ?>

			<!--procuct navy - KITCHENS -->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 9');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=container.php?id=<?php echo $r1['id']; ?> target="_blank"><?php echo $r1['main']; ?></a>	
				
				<!--procuct navy - kitchens - kitchen sets-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 10');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank" ><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 10 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank" ><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - kitchens - kitchen corners-->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 11');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 11 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - kitchens -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 12');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 12 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - kitchens - bufets -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 13');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 13 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				</li>
				<?php } ?>


			<!--procuct navy - WARDROBES -->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 14');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=<?php echo $r1['href']; ?> target="_blank"><?php echo $r1['title']; ?></a></li><?php } ?>

			<!--procuct navy - CASE FURNITURE -->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 15');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=container.php?id=<?php echo $r1['id']; ?> target="_blank"><?php echo $r1['main']; ?></a>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 16');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 16 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture - bedrooms -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 17');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 17 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

					<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 18');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 18 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 19');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 19 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

					<!--procuct navy - case furniture - tables -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 20');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank" ><?php echo $cat['title']; ?></a>

							<!--procuct navy - case furniture - tables -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 21');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?>  target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 21 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>

							<!--procuct navy - case furniture - tables -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 22');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 22 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>
							
							<!--procuct navy - case furniture - tables -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 23');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 23 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>
							
							<!--procuct navy - case furniture - tables -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 24');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 24 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>


						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 25');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>

							<!--procuct navy - case furniture -  -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 26');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 26 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>
							
							<!--procuct navy - case furniture -  -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 27');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 27 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank" ><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>
							
							<!--procuct navy - case furniture -  -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 28');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 28 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>
							
							<!--procuct navy - case furniture -  -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 29');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 29 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>


						</li>
					</ul>
					<?php } ?>

					<!--procuct navy - case furniture - beds -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 30');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<!--procuct navy - case furniture - beds - beds -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 31');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 31 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>
							
							<!--procuct navy - case furniture - beds - childrensbeds -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 32');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 32 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>


						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 33');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 33 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 34');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>

							<!--procuct navy - case furniture -  -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 35');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank" ><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 35 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>

							<!--procuct navy - case furniture -  -  -->
							<?php
								$podcategory = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 36');
								while ($podcat = mysqli_fetch_assoc ($podcategory)) {
							?>
							<ul>
								<li><a href=container.php?id=<?php echo $podcat['cat']; ?> target="_blank"><?php echo $podcat['title']; ?></a>
									<?php
										$product = mysqli_query ($connection, 'SELECT * FROM products WHERE pod_cat = 36 ORDER BY title');
										while ($prod = mysqli_fetch_assoc ($product)) {
									?>
									<ul>
										<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
									</ul>
									<?php } ?>
								</li>
							</ul>
							<?php } ?>


						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 37');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 37 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

					<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 38');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 38 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 39');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 39 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>

				<!--procuct navy - case furniture -  -->
					<?php
						$category = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 40');
						while ($cat = mysqli_fetch_assoc ($category)) {
					?>
					<ul>
						<li><a href=container.php?id=<?php echo $cat['id']; ?> target="_blank"><?php echo $cat['title']; ?></a>
							<?php
								$product = mysqli_query ($connection, 'SELECT * FROM products WHERE cat = 40 ORDER BY title');
								while ($prod = mysqli_fetch_assoc ($product)) {
							?>
							<ul>
								<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
							</ul>
							<?php } ?>
						</li>
					</ul>
					<?php } ?>
					</li><?php } ?>

			<!--procuct navy  - OTHER -->
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM prod_categories WHERE id = 41');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li><a href=<?php echo $r1['href']; ?> target="_blank" ><?php echo $r1['title']; ?></a>
					<?php
						$product = mysqli_query ($connection, 'SELECT * FROM products WHERE main_cat = 41 ORDER BY title');
						while ($prod = mysqli_fetch_assoc ($product)) {
					?>
					<ul>
						<li><a href=block.php?id=<?php echo $prod['id']; ?> target="_blank"><?php echo $prod['title']; ?></a></li>
					</ul><?php } ?>
				</li><?php } ?>

			</ol>
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
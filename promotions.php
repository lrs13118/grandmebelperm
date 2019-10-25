<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Новости и акции | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="новости, акции, скидка, опт, обновление, эксклюзивный">
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
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 3');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="promotions_container">
			<div class="brend_face"><img src="img/brandface.png"></div>
			<div class="news_promotions_container">
				<h2 class="section_name">Новости и акции</h2>
				<div class="promotions_block_container">
					<?php
						$result = mysqli_query ($connection, 'SELECT * FROM news_promotion ORDER BY id DESC');
						while ($r1 = mysqli_fetch_assoc ($result)) {
					?>
					<div class="promo_block">
						<div id=<?php echo $r1['identification']; ?>><img src=img/promo/<?php echo $r1['img']; ?>></div>
						<div>
							<h3><?php echo $r1['title']; ?></h3>
							<p><?php echo $r1['description']; ?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
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
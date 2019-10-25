<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Наши партнеры | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="партнер, мебельный, фабрика, производство">
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
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 1');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="partners_container">
			<?php
				$result = mysqli_query ($connection, 'SELECT * FROM partners');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<?php if ($r1['title'] != 'Мебельная компания "МИФ"') { ?>
			<div class="partners_block">
				<img src=img/partners/<?php echo $r1['img']; ?>>
				<a href=<?php echo $r1['href']; ?> target="_blank"><?php echo $r1['title']; ?></a>
				<p><?php echo $r1['description']; ?> <?php echo $r1['city']; ?></p>
			</div>
			<?php } ?>
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
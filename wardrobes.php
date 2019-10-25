<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Шкафы-купе | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="шкаф, купе, прайс">
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
				$result = mysqli_query ($connection, 'SELECT * FROM product_nav WHERE id = 14');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<h2 align="center">Шкафы-купе</h2>
		<div class="wardrobes_container">
			<div class="profile">
				<h4 align="center">Цвета профиля</h4>
				<div class="profile_container">
					<div class="profile_block">
						<img src="img/wardrobes/profile-silver.jpg">
						<p align="center">Серебро</p>
					</div>
					<div class="profile_block">
						<img src="img/wardrobes/profile-bronza.jpg">
						<p align="center">Бронза</p>
					</div>
					<div class="profile_block">
						<img src="img/wardrobes/profile-black.jpg">
						<p align="center">Черный</p>
					</div>
				</div>
			</div>
			<div class="filling">
				<h4 align="center">Примеры наполнения</h4>
				<div class="filling_container">
					<div class="filling_block">
						<img src="img/wardrobes/filling.jpg">
						<p></p>
					</div>
					<div class="filling_block">
						<img src="img/wardrobes/filling1.jpg">
						<p></p>
					</div>
				</div>
			</div>
			<div class="complectation">
				<h4 align="center">Комплектация</h4>
				<div class="complectation_container">
					<div class="complectation_block">
						<img src="img/wardrobes/complectation22.jpg">
						<p align="center">Двухдверный</p>
					</div>
					<div class="complectation_block">
						<img src="img/wardrobes/complectation22+.jpg">
						<p align="center">Двухдверный с боковыми полками</p>
					</div>
					<div class="complectation_block">
						<img src="img/wardrobes/complectation3.jpg">
						<p align="center">Трехдверный</p>
					</div>
					<div class="complectation_block">
						<img src="img/wardrobes/complectation3+.jpg">
						<p align="center">Трехдверный с боковыми полками</p>
					</div>
				</div>
			</div>
			<div class="wardrobes_price">
				<h4 align="center">Прайс</h4>
				<hr>
				<div class="wardrobes_price_container">
					<div class="wardrobes_price_block">
						<img src="img/wardrobes-price.jpg">
					</div>
				</div>
			</div>
			<div class="wardrobes_mail">
				<p align="center">Присылайте свои варианты для расчета стоимости на почту <a href="mailto:grandmebelperm@mail.ru??subject=Письмо на почту" title="Наша почта"><em class="fa fa-envelope-o">   grandmebelperm@mail.ru </em></a> Не забудьте указать высоту, ширину, глубину шкафа, его наполнение и наполнение дверей, предпочтения по внешнему виду, а так же свой номер телефона. И мы обязательно свяжемся с вами!</p>
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
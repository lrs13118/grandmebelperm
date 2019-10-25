<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Оплата и доставка | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="оплата, опт, мебель, сборка, доставка, подъем, стоимость">
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
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 2');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="payment_container">
			<div class="payment_wholesale_assembling">
				<div class="payment_block">
					<h2>Оплата</h2>
					<hr>
					<p>Оплата наличными по адресу:</p>
					<p><a href="contacts.php" target="_blank">г. Пермь, ул. Свиязева 39 (2 этаж).</a></p>
				</div>
				<div class="payment_block">
					<h2 id="whoresale">Оптовым покупателям</h2>
					<hr>
					<p>Для получения подробной информации и прайса для оптовых покупателей обращайтесь на почту: <br><br> <a href="">grandmebelperm@mail.ru</a></p>
				</div>
				<div class="payment_block">
					<h2>Сборка мебели</h2>
					<hr>
					<p>Сборка <a href="wardrobes.php" target="_blank" title="Кликните, чтоб посмотреть информацию о шкафах-купе под заказ!">шкафов-купе</a> 10% от стоимости.</p>
					<p>Сборка <a href="container.php?id=10" target="_blank" title="Кликните, чтоб открыть меню с кухонными гарнитурами!">кухонных гарнитуров</a> и другой <a href="container.php?id=15" target="_blank" title="Кликните, чтоб открыть меню с корпусной мебелью!">корпусной мебели</a> 15% от стоимости.</p>
					<p>Сборка <a href="special-offers.php#Kuanchor" target="_blank" title="Кликните, чтоб посмотреть информацию о кухнях под заказ!">кухонь по индивидуальным заказам</a> - сборка 10%.</p>
				</div>
			</div>
			<div class="delivery_lifting">
				<div class="delivery_block">
					<h2>Доставка мебели</h2>
					<hr>
					<img src="img/delivery.jpg">
				</div>
				<div class="delivery_block">
					<h2>Подъем мебели</h2>
					<hr>
					<img src="img/lifting.jpg">
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
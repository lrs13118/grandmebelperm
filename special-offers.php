<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Мебель по индивидуальным заказам</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="">
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
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 4');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href="">Мебель по индивидуальным заказам</a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="spec_offers_block">
			<div class="markup">
				<div><a href="special-offers.php#MManchor">Мягкая мебель по индивидуальным заказам</a></div>
				<div>|</div>
				<div><a href="special-offers.php#Kranchor">Кровати по индивидуальным заказам</a></div>
				<div>|</div>
				<div><a href="special-offers.php#SKanchor">Шкафы-купе по индивидуальным заказам</a></div>
				<div>|</div>
				<div><a href="special-offers.php#Kuanchor">Кухни по индивидуальным заказам</a></div>
			</div>
		</div>
		<div class="spec_offers_container">
			<div class="MMso_section">
				<p>&nbsp;</p>
				<h2 align="center" id="MManchor">Мягкая мебель по индивидуальным заказам</h2>
				<hr>
				<div class="spec_offers_block">
					<p>Наш салон является крупным поставщиком мягкой мебели пермских производителей. Мы предлагаем услуги по изготовлению мягкой мебели на заказ: диваны, кресла, наборы.<br>Изготовление мебели проводится с учетом размеров, пожеланий заказчика. </p>
					<h3>Что вы получите работая с нами ?</h3>
					<p>Заказав мягкую мебель у нас, Вы получите:
						<ul class="items">
							<li>индивидуальные габариты мебели;</li>
							<li>разнообразный выбор материалов, подходящих под любой заказ и удовлетвоярющий любые вкусы;</li>
							<li>гарантия и качество - всю работу выполняют профессионалы, гарантия на мебель 1,5 года;</li>
							<li>уникальность Вашего интерьера.</li>
						</ul>
					</p>
				</div>
				<div>
					<div class="advantages">
						<img src="img/advantages.jpg" width="100%">
					</div>
				</div>
				<p>&nbsp;</p>
				<div class="spec_offers_block">
					<h3>Процесс работы</h3>
					<p>Заказ мебели проходит следующие этапы:
						<ul class="items">
							<li>приходите в наш салон по адресу: <a href="contacts.php" target="_blink">г. Пермь, ул. Свиязева 39 (2 этаж)</a>, либо свяжитесь нами по номеру телефона <a href="viber://add?number=89082749069">89082749069</a> или по почте <a href="">grandmebelperm@mail.ru</a>;</li>
							<li>подбор модели по каталогу либо по вашим фото;</li>
							<li>выбор материалов: обивка, декор, детали;</li>
							<li>расчет стоимости и утверждение;</li>
							<li>заключение договора и предоплата (30-50%);</li>
							<li>изготовление заказа в течение 14-21 дня;</li>
							<li>доставка, установка и доплата.</li>
						</ul>
					</p>
				</div>
				<div>
					<div class="advantages">
						<img src="img/process.jpg" width="100%">
					</div>
				</div>
				<p>&nbsp;</p>
			</div>
			<div class="Krso_section">
				<p>&nbsp;</p>
				<h2 align="center" id="Kranchor">Кровати по индивидуальным заказам</h2>
				<hr>
				<div class="spec_offers_block">
					<p>Решив изготовить кровать на заказ, важно ориентироваться на предполагаемые габариты мебели и сопоставить их с пространством комнаты, продумать дизайн кровати, чтобы вписаться в интерьер, а также учитывать свой рост и вес. Так же немаловажно обратить внимание на проемы дверей и предусмотреть возможность вноса мебели.</p>
					<h3>Наши предложения</h3>
					<p>Изготовление кроватей под заказ происходит с учетом следующих факторов:
						<ul class="items">
							<li>размеры (0,9м; 1,2м; 1,4м; 1,6м; 1,8м);</li>
							<li>конструкторские особенности (с подъемным механизмом / без подъемного механизма);</li>
							<li>дизайн (большое разнообразие тканей; выбор формы спинки по каталогу или по вашим фото).</li>
						</ul>
					</p>
				</div>
				<p>&nbsp;</p>
			</div>
			<div class="SKso_section">
				<h2 align="center" id="SKanchor"><a href="wardrobes.php">Шкафы-купе по индивидуальным заказам &gt;&gt;</a></h2>
			</div>
			<div class="Kuso_section">
				<p>&nbsp;</p>
				<h2 align="center" id="Kuanchor">Кухни по индивидуальным заказам</h2>
				<hr>
				<div class="spec_offers_block">
					<p>Неоспоримые достоинства кухонь под заказ - удовлетворение любых потребностей, путем подбора материалов и комплектации, подходящих именно Вам; возможность продумать и учесть все детали для Вашего комфорта.</p>
					<h3>Преимущества заказных кухонь</h3>
					<p>Заказав кухню у нас, Вы получите:
						<ul class="items">
							<li>индивидуальные размеры;</li>
							<li>своеобразная конструкция модулей под нестандартные размеры и запросы;</li>
							<li>придание кухне любого стиля;</li>
							<li>сборка профессионалами;</li>
							<li>одна из самых низких цен по городу.</li>
						</ul>
					</p>
				</div>
				<div>
					<div class="advantages">
						<img src="img/advan-kitchens.jpg" width="100%">
					</div>
				</div>
				<div class="spec_offers_block">
					<h3>Процесс работы</h3>
					<p>Заказ кухни проходит следующие этапы:
						<ul class="items">
							<li>приходите в наш салон по адресу: <a href="contacts.php" target="_blink">г. Пермь, ул. Свиязева 39 (2 этаж)</a>;</li>
							<li>конфигурация кухни, подбор материалов, просчет примерной стоимости;</li>
							<li>выезд на замер (500 руб.);</li>
							<li>3D-проект с конечным размерами;</li>
							<li>расчет стоимости и утверждение;</li>
							<li>заключение договора и предоплата (30-50%);</li>
							<li>изготовление заказа в течение 1-1.5 месяца;</li>
							<li>доставка, установка и доплата.</li>
						</ul>
					</p>
				</div>
				<p>&nbsp;</p>
				<div class="spec_offers_block">
					<h3>Возможности заказных кухонь:</h3>
				</div>
				<div>
					<div class="advantages">
						<img src="img/kitche.png" width="100%">
					</div>
				</div>
				<p>&nbsp;</p>
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
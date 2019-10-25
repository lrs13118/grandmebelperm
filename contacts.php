<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Контакты | <?php echo $config['title']; ?></title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="адрес, время, работа, почта">
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
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 5');
				while ($r1 = mysqli_fetch_assoc ($result)) {
			?>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>></li>
				<li><a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<h3 align="center">Как нас найти:</h3>
		<div class="contacts_container">
			<div class="yandex_map">
				<div class="map_web">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A550f39236529587717876579f4206a46e0361daf97ecaef82008db5de303c37e&amp;width=860&amp;height=555&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
				
				<div class="map_mob">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A550f39236529587717876579f4206a46e0361daf97ecaef82008db5de303c37e&amp;width=312&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
			<div class="contacts">
				<h3>Адрес:</h3>
				<p><em class="fa fa-home">&#160 г. Пермь, ул. Свиязева 39 <br>(ТЦ "Терра-Интьера", 2 этаж)</em></p>
				<h3>Время работы:</h3>
				<p>ПН-ВС 10:00-19:00</p>
				<h3>Телефон:</h3>
				<p>
					<em class="fa fa-phone">&#160 <a href="viber://add?number=89082749069">89082749069</a> - Ирина</em><br>
					<em class="fa fa-phone">&#160 <a href="viber://add?number=89091068187">89091068187</a> - Кристина</em>
				</p>
				<h3>Электронная почта:</h3>
				<p><em class="fa fa-envelope-o">&#160 grandmebelperm@mail.ru</em></p>
				<h3>Социальные сети:</h3>
				<div class="sm_contacts">
					<a href="https://www.instagram.com/grandmebelperm/" title="Наш Instagram" target="_blank"><img src="img/logoinsta.jpg"> Наш Instagram</a><br>
					<a href="https://vk.com/grandmebelperm" title="ВКонтакте" target="_blank"><img src="img/logovk.jpg"> ВКонтакте</a><br>
					<a href="https://www.youtube.com/channel/UCM_Hji2yZgA3dvwux-vsv8g" title="Наш канал на YouTube" target="_blank"><img src="img/logoyoutube.png"> Наш канал на YouTube</a>
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
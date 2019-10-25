<?php
	require "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<meta name="keywords" content="гранд, мягкая, мебель, новинки, Пермь, от, производитель">
	<meta name="description" content=<?php echo $config['description']; ?>>
	<title>Главная | <?php echo $config['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="slider/slider.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<meta name="yandex-verification" content="d85921f073ab3032" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
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
		<div class="slider_container">
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="img/pict_main_slideshow_1.jpg" style="width: 100%">
					<div class="text"></div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="img/pict_main_slideshow_2.jpg" style="width: 100%">
					<div class="text"></div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="img/pict_main_slideshow_3.jpg" style="width: 100%">
					<div class="text"></div>
				</div>
				<!--<a href="" class="prev" onclick="plusSlides(-1)">&#10094</a>
				<a href="" class="next" onclick="plusSlides(1)">&#10095</a>-->
			</div>
			<br>
			<!--<div style="text-align: center;">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>-->
			<script src="slider/slider.js"></script>
		</div>
		<div class="main_container">
			<div class="novelties">
				<h2 class="section_name">Лидеры продаж</h2>
				<div class="blocks_slider_container">
					<div class="no_slider_block_container">
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products WHERE id = 21');
							$r1 = mysqli_fetch_assoc ($result) 
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<p>от <span><?php echo $r1['price']?></span> руб.</p>
							</a>	
						</div>
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products WHERE id = 13');
							$r1 = mysqli_fetch_assoc ($result) 
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<p>от <span><?php echo $r1['price']?></span> руб.</p>
							</a>	
						</div>
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products WHERE id = 165');
							$r1 = mysqli_fetch_assoc ($result) 
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<p>от <span><?php echo $r1['price']?></span> руб.</p>
							</a>	
						</div>
					</div>
					<div class="no_slider_block_container_mob">
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products WHERE id = 40');
							$r1 = mysqli_fetch_assoc ($result) 
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<p>от <span><?php echo $r1['price']?></span> руб.</p>
							</a>	
						</div>
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products WHERE id = 20');
							$r1 = mysqli_fetch_assoc ($result) 
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<p>от <span><?php echo $r1['price']?></span> руб.</p>
							</a>	
						</div>
					</div>
				</div>
			</div>
			<div class="special_offers_section">
				<h2 class="section_name">Специальные предложения по индивидуальным заказам</h2>
				<div class="special_offers_container">
					<div class="special_offers">
						<a href="special-offers.php#MManchor" class="MM">
							<div id="MM" class="block-img">
								<img src="img/cmf-sofa.png" id="MM">
							</div>
							<div align="center">Мягкая мебель</div>
						</a>
					</div>
					<div class="special_offers">
						<a href="special-offers.php#Kranchor" class="Kr">
							<div id="Kr" class="block-img">
								<img src="img/cmf-bed.png">
							</div>
							<div align="center">Кровати</div>
						</a>
					</div>
					<div class="special_offers">
						<a href="wardrobes.php" class="SK">
							<div id="SK" class="block-img">
								<img src="img/cmf-wardrobes.png" id="SK">
							</div>
							<div align="center">Шкафы-купе</div>
						</a>
					</div>
					<div class="special_offers">
						<a href="special-offers.php#Kuanchor" class="Ku">
							<div id="Ku" class="block-img">
								<img src="img/cmf-kitchen.png" id="Ku">
							</div>
							<div align="center">Кухни</div>
						</a>
					</div>
				</div>
				<div class="special_offers_container_mob">
					<div class="special_offers_mob">
						<a href="special-offers.php#MManchor" class="MM_mob">
							<div id="MM_mob" class="block-img">
								<img src="img/cmf-sofa.png" id="MM_mob">
							</div>
							<div align="center">Мягкая мебель</div>
						</a>
					</div>
					<div class="special_offers_mob">
						<a href="special-offers.php#Kranchor" class="Kr_mob">
							<div id="Kr_mob" class="block-img"> 
								<img src="img/cmf-bed.png" id="Kr_mob">
							</div>
							<div align="center">Кровати</div>
						</a>
					</div>
					<div class="special_offers_mob">
						<a href="wardrobes.php" class="SK_mob">
							<div id="SK_mob" class="block-img">
								<img src="img/cmf-wardrobes.png" id="SK_mob">
							</div>
							<div align="center">Шкафы-купе</div>
						</a>
					</div>
					<div class="special_offers_mob">
						<a href="special-offers.php#Kuanchor" class="Ku_mob">
							<div id="Ku_mob" class="block-img">
								<img src="img/cmf-kitchen.png" id="Ku_mob">
							</div>
							<div align="center">Кухни</div>
						</a>
					</div>
				</div>
			</div>
			<div class="novelties">
				<h2 class="section_name">Новинки</h2>
				<div class="blocks_slider_container">
					<div class="no_slider_block_container">
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products ORDER BY id DESC LIMIT 3');
							while ( $r1 = mysqli_fetch_assoc ($result)) {
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<?php if ($r1['price'] == 0) {echo '<p><span>Цену уточняйте<span><p>';} else echo '<p>от <span> '.$r1['price'].'</span> руб.</p>';?>
							</a>
						</div><?php } ?>
					</div>
					<div class="no_slider_block_container_mob">
						<?php 
							$result = mysqli_query ($connection, 'SELECT * FROM products ORDER BY id DESC LIMIT 2');
							while ( $r1 = mysqli_fetch_assoc ($result)) {
						?>
						<div class="no_slider_block">
							<a href=block.php?id=<?php echo $r1['id']; ?>>
								<img src=img/prod_photo/<?php if ($r1['img'] != null) { echo $r1['img']; } else echo 'kot.jpg' ?>>
								<p><?php echo $r1['title']?></p>
								<hr>
								<?php if ($r1['price'] == 0) {echo '<p><span>Цену уточняйте<span><p>';} else echo '<p>от <span> '.$r1['price'].'</span> руб.</p>';?>
							</a>
						</div><?php } ?>
					</div>
				</div>
			</div>
			<div class="news_promotion">
				<h2 class="section_name">Новости и акции</h2>
				<div class="news_promotion_container_web">
					<?php 
						$result = mysqli_query ($connection, 'SELECT * FROM news_promotion ORDER BY id DESC LIMIT 3');
						while ( $r1 = mysqli_fetch_assoc ($result)) {
					?>
					<div class="news_promotion_block">
						<a href=promotions.php#<?php echo $r1['identification']; ?>>
							<img src=img/promo/<?php echo $r1['img']?> >
							<h4><?php echo $r1['title']; ?></h4>
							<p><?php echo mb_substr($r1['description'], 0, 100, 'utf-8'); ?>...</p>
						</a>
					</div>
					<?php 
						}
					?>
				</div>
				<div class="news_promotion_container_mob">
					<?php 
						$result = mysqli_query ($connection, 'SELECT * FROM news_promotion ORDER BY id DESC LIMIT 2');
						while ( $r1 = mysqli_fetch_assoc ($result)) {
					?>
					<div class="news_promotion_block">
						<a href=promotions.php#<?php echo $r1['identification']; ?>>
							<img src=img/promo/<?php echo $r1['img']?> >
							<h5><?php echo $r1['title']; ?></h5>
							<p><?php echo mb_substr($r1['description'], 0, 100, 'utf-8'); ?>...</p>
						</a>
					</div>
					<?php 
						}
					?>
				</div>
			</div>
			<div class="main_page_map">
				<a href="contacts.php"><img src="img/map.png"></a>
			</div>
			<div class="insta_widget">
				
			</div>
			<div class="main_page_description">
				<h2 class="section_name">Гранд-мебель</h2>
				<div class="description">
					<p>В нашем салоне вы сможете подобрать себе мебель в любом стиле и цветовой гамме. Наш ассортимент наполнен различными вариантами под каждую из ценновых категорий преимущественно пермских производителей. Представленная продукция подарит вашему дому чувство комфорта и уюта на долгие годы.</p>
					<p>Удачный подбор мебели поможет организовать определенную обстановку в доме, поэтому рекомендуем обратиться к нашим опытным консультантам, которые с удовольствием поделятся своими советами с вами и помогут подобрать идеальный вариант для вас.</p>
				</div>
			</div>
			<div class="main_page_articles_insta">
				<div class="artic">
					<h2 align="center">Советуем почитать:</h2>
					<ol>
					<?php 
						$result = mysqli_query ($connection, 'SELECT * FROM articles');
						while ( $r1 = mysqli_fetch_assoc ($result)) {
						if ($r1['id'] != 1) { 
					?>
						<li>
						<a href=articles.php?id=<?php echo $r1['id']; ?>><?php echo $r1['title']; ?></a><br>
						<?php if ($r1['description'] != NULL) { ?>
						<span><?php echo mb_substr ($r1['description'], 0, 120, 'utf-8'); ?>...</span><?php } ?>
						</li>
					<?php } ?><?php } ?>
					</ol>
				</div>
				<div class="inst" align="center">
					<iframe src="//widget.instagramm.ru/?imageW=2&imageH=2&thumbnail_size=117&type=0&typetext=grandmebelperm&head_show=1&profile_show=1&shadow_show=1&bg=255,255,255,1&opacity=true&head_bg=46729b&subscribe_bg=ad4141&border_color=c3c3c3&head_title=" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:260px;height:399px;"></iframe>
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
		<?php include "footer.php";?>
	</footer>
</body>

<style type="text/css">
	#wrap_preloader {
    width: 100%;
    height: 100%;
    position: fixed;
    margin: 0px auto;
    background: #282828;
    z-index: 9999;
    text-align: center;
    color: #fff;
    letter-spacing: 5px;
    font-family: arial;
    font-size: 50px;
    padding-top: 260px;
  }
</style>

  


<div id='wrap_preloader'>
    Идет загрузка...
  </div>

<script type='text/javascript'>
    $(window).on('load', function () {
      $('#wrap_preloader').delay(500).fadeToggle(500);
    });
</script>
<script src="script.js" type="text/javascript"></script>
</html>

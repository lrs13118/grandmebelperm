	<div class="header_wrap_container">	
		<nav class="header_nav">
			<ul>
				<li>
					<a href="special-offers.php">
						<b style="color: red">! МЕБЕЛЬ ПОД ЗАКАЗ !</b>
					</a>
				</li>
				<?php
					$result = mysqli_query ($connection, 'SELECT * FROM header_nav');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				<li>
					<a href=<?php echo $r1['href']; ?>>
						<?php echo $r1['title']; ?>
					</a>
				</li>
				<?php } ?>
			</ul>
		</nav>

		<style>
			.header-container {display: flex; justify-content: space-between; background-color: black; height: 80px; margin-top: -18px; padding: 10px 15px 20px 15px;}
			.header-block {flex: 1;}
			.header-block a {text-decoration: none;} 

			.header-block > a > img {height: 100%; padding-left: 30px} 

			.map-adress {display: flex; justify-content: flex-start; margin-top: 23px;}
			.place img {width: 40px;}
			.header-adress span {color: #e6e6e6; font-size: 10pt;}
			.header-adress span:hover {color: white;}
			
			.header-connection {display: flex; justify-content: space-around; margin-top: 15px;}
			.header-sm img {width: 50px; border-radius: 25px;}
			.header-numbers div a {color: #e6e6e6; font-size: 15pt;}
			.header-numbers div a:hover {color: white;}

			.header-sm img, .place img { 
				-webkit-transition:all 0.5s linear 0s; 
				-moz-transition:all 0.5s linear 0s; 
				-o-transition:all 0.5s linear 0s; 
				transition:all 0.5s linear 0s; 
				-webkit-transform-origin:center !important; 
				-moz-transform-origin:center !important; 
				-ms-transform-origin:center !important; 
				-o-transform-origin:center !important; 
				transform-origin:center !important; 
			} 
			.header-sm:hover img, .map-adress:hover .place img { 
				-webkit-transform:scale(1.2); 
				-moz-transform:scale(1.2); 
				-ms-transform:scale(1.2); 
				-o-transform:scale(1.2); 
				transform:scale(1.2); 
			}

			.header-email {padding: 15px 0 0 45px; color: #e6e6e6; font-size: 10pt;}
			.header-email:hover {color: #e6e6e6;}
			.header-email a {font-size: 15pt; color: red;}
			.header-email a:hover {color: blue;}
		</style>


		<div class="header-container">
			<div class="header-block"><a href="index.php"><img src="img/logoGM.png" alt=""></a></div>
			<div class="header-block header-location">
				<a href="contacts.php">
					<div class="map-adress">
						<div class="place"><img src="img/place.png" alt=""></div>
						<div class="header-adress">
							<span>г. Пермь, ул. Свиязева, 39 (2 этаж)</span><br>
							<span>Время работы: 10:00 - 19:00</span>
						</div>
					</div>
				</a>
			</div>
			<div class="header-block header-connection">
				<div class="header-sm"><a href="https://www.instagram.com/grandmebelperm/" title="Наш Instagram" target="_blank"><img src="img/logoinsta.jpg"></a></div>
				<div class="header-sm"><a href="viber://add?number=89082749069" title="Свяжитесь с нами по Viber!"><img src="img/viber.png"></a></div>
				<div class="header-numbers">
					<div><a href="viber://add?number=89082749069" title="Ирина"><b>+7 908 274 90 69</b></a></div>
					<div><a href="viber://add?number=89091068187" title="Кристина"><b>+7 909 106 81 87</b></a></div>
				</div>
			</div>
			<div class="header-block header-email">
				<div>По всем вопросам обращайтесь по почте:</div><br>
				<div><a href="mailto:grandmebelperm@mail.ru??subject=Письмо на почту" title="Наша почта"><em class="fa fa-envelope-o">&nbsp;&nbsp;<b>grandmebelperm@mail.ru</b></em></a></div>
			</div>
		</div>
	</div>

	<style>
		.header-mob {display: none; margin-top: 10px;}
		.header-mob a {text-decoration: none;}
		@media (max-width: 1250px) {
			.header-mob {display: block;}
		}
		.header-block-mob {display: flex; justify-content: space-between; height: 70px; background-color: black;}
		.logo-mob a img {height: 85%; padding: 5px;}
		.header-connection-mob {display: flex; justify-content: space-around; margin-top: 12px;}
		.header-connection-mob div {margin: 0 10px;}
		@media (max-width: 720px) {
			.header-adress-mob span {font-size: 8pt;}
			.header-sm img {width: 35px;}
			.header-connection-mob {margin-top: 20px;}
		}
		@media (max-width: 650px) {
			.map-adress-mob {display: none;}
			.map-wrap-adress-mob, .header-wrap-connection-mob, .header-wrap-email {display: flex; justify-content: space-around;}

		}
		@media (max-width: 450px) {
			.header-sm {display: none;}		}
		@media (max-width: 950px) {
			.header-numbers-mob {display: none;}
		}
		.header-wrapper-menu-mob {color: white; font-size: 46pt; margin: 7px 10px 7px 10px; cursor: pointer;}
		.header-wrap-menu-block-mob {background-color: #3e3d3b; display: none; margin-bottom: -16px;}
		.header-wrap-adress-numbers {display: flex; justify-content: space-around; background-image: linear-gradient(#000000, #3e3d3b);}
		@media (max-width: 450px) {
			.header-wrap-adress-numbers {display: block;}
			.header-sm-wrap {display: block;}
			.header-sm-wrap img {width: 50px;}
		}
		@media (max-width: 450px)(min-width: 550px) {
			.header-wrap-adress-mob span {font-size: 8pt;}
		}
		@media (max-width: 400px) {
			.header-sm-wrap img {width: 40px; margin-top: 8px;}
		}
		@media (min-width: 650px) {
			.map-wrap-adress-mob, .header-wrap-connection-mob {display: none;}
			.header-wrap-menu-block-mob ul {margin-top: 0;}
		}
		@media (min-width: 450px) {
			.header-wrap-connection-mob {display: none;}
		}
		.header-wrap-email {display: flex; justify-content: space-around; margin: 35px 0 15px 0;}
		.header-wrap-email div a {font-size: 12pt; color: red;}
		.header-wrap-email div a:hover {color: blue;}
		.header-wrap-menu-block-mob ul {padding: 0;}
		.header-wrap-menu-block-mob li {list-style: none; width: 100%; padding: 5px 0 5px 10px; text-align: center;}
		.header-wrap-menu-block-mob li:hover {background-image: linear-gradient(#dadad9, #c4c4c3, #dadad9);}
		.header-wrap-menu-block-mob a {font-size: 10pt; color: white;}
		.header-wrap-menu-block-mob a li:hover  {color: black;}
	</style>

	<div class="header-mob">
		<div>
			<div class="header-block-mob">
				<div class="logo-mob"><a href="index.php"><img src="img/logoGM.png" alt=""></a></div>
				<div class="map-adress-mob">
					<a href="contacts.php">
						<div class="map-adress">
							<div class="place"><img src="img/place.png" alt=""></div>
							<div class="header-adress header-adress-mob">
								<span>г. Пермь, ул. Свиязева, 39 (2 этаж)</span><br>
								<span>Время работы: 10:00 - 19:00</span>
							</div>
						</div>
					</a>
				</div>
				<div class="header-connection-mob">
					<div class="header-sm"><a href="https://www.instagram.com/grandmebelperm/" title="Наш Instagram" target="_blank"><img src="img/logoinsta.jpg"></a></div>
					<div class="header-sm"><a href="viber://add?number=89082749069" title="Свяжитесь с нами по Viber!"><img src="img/viber.png"></a></div>
					<div class="header-numbers header-numbers-mob">
						<div><a href="viber://add?number=89082749069" title="Ирина"><b>+7 908 274 90 69</b></a></div>
						<div><a href="viber://add?number=89091068187" title="Кристина"><b>+7 909 106 81 87</b></a></div>
					</div>
				</div>
				<div class="header-wrapper-menu-mob"><em class="fa fa-bars"></em></div>
			</div>
			<div class="header-wrap-menu-block-mob">
				<div class="header-wrap-adress-numbers">
					<div class="map-wrap-adress-mob">
						<a href="contacts.php">
							<div class="map-adress">
								<div class="place"><img src="img/place.png" alt=""></div>
								<div class="header-adress header-wrap-adress-mob">
									<span>г. Пермь, ул. Свиязева, 39 (2 этаж)</span><br>
									<span>Время работы: 10:00 - 19:00</span>
								</div>
							</div>
						</a>
					</div>
					<div class="header-connection-mob header-wrap-connection-mob">
						<div class="header-sm header-sm-wrap"><a href="https://www.instagram.com/grandmebelperm/" title="Наш Instagram" target="_blank"><img src="img/logoinsta.jpg"></a></div>
						<div class="header-sm header-sm-wrap"><a href="viber://add?number=89082749069" title="Свяжитесь с нами по Viber!"><img src="img/viber.png"></a></div>
						<div class="header-numbers header-wrap-numbers">
							<div><a href="viber://add?number=89082749069" title="Ирина"><b>+7 908 274 90 69</b></a></div>
							<div><a href="viber://add?number=89091068187" title="Кристина"><b>+7 909 106 81 87</b></a></div>
						</div>
					</div>
					<div class="header-wrap-email">
						<div><a href="mailto:grandmebelperm@mail.ru??subject=Письмо на почту" title="Наша почта"><em class="fa fa-envelope-o">&nbsp;&nbsp;<b>grandmebelperm@mail.ru</b></em></a></div>
					</div>
				</div>
				<ul>
					<a href="/"><li>Главная</li></a>
					<?php $result = mysqli_query ($connection, 'SELECT * FROM header_nav');
						while ($r1 = mysqli_fetch_assoc ($result)) { ?>
					<a href=<?php echo $r1['href'];?>><li><?php echo $r1['title']; ?></li></a>
					<?php } ?>
				</ul>
			</div>
		</div>

		<style>
			.header-block-wrapper-mob {margin-bottom: -10px;}	
			.catalog-wrapper-mob {height: 50px; background-image: linear-gradient(red, #ff3333); border-radius: 0 0 75px 75px; text-align: center; font-weight: bold; font-size: 25pt; cursor: pointer; z-index: 1000;}
			@media (max-width: 900px) {.catalog-wrapper-mob {border-radius: 0 0 50px 50px;}}
			@media (max-width: 750px) {.catalog-wrapper-mob {border-radius: 0 0 35px 35px;}}
			@media (max-width: 550px) {.catalog-wrapper-mob {border-radius: 0 0 30px 30px;}}
			@media (max-width: 500px) {
				.catalog-wrapper-mob {border-radius: 0 0 20px 20px; font-size: 17pt;}
				.catalog-wrapper-mob em {padding-top: 11px}
			}
			.catalog-wrapper-mob em {padding-top: 7px}
			.catalog-wrap-menu-mob {width: 90%; margin: -5px 5% 0 5%; background-color: #ff3333; display: none;}
			.catalog-wrap-menu-mob ul {padding: 5px 0 0 0; margin: 0;}
			.catalog-wrap-menu-mob li {list-style: none; width: 98%; text-align: center; padding: 1%;}
			.catalog-wrap-menu-mob li:hover {background-image: linear-gradient(#ff3333, red);}
			.catalog-wrap-menu-mob a {color: white;}
		</style>


		<div class="header-block-wrapper-mob">
			<div class="catalog-wrapper-mob"><em class="fa fa-bars">&nbsp;&nbsp;КАТАЛОГ ТОВАРОВ</em></div>
			<div class="catalog-wrap-menu-mob">
				<ul>
					<a href="special-offers.php"><li><b>! МЕБЕЛЬ ПОД ЗАКАЗ !</b></li></a>
					<?php $result = mysqli_query ($connection, 'SELECT * FROM product_nav');
						while ($r1 = mysqli_fetch_assoc ($result)) { ?>
					<a href=<?php echo $r1['href']; ?> ><li><?php echo $r1['title']; ?></li></a>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>


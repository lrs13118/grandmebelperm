		<div class="big_redline"></div>
		<div class="footer_socialmedia">
			<div class="social_media">
				<a href="https://www.instagram.com/grandmebelperm/" title="Наш Instagram" target="_blank"><img src="img/logoinsta.jpg"></a>
				<a href="https://vk.com/grandmebelperm" title="ВКонтакте" target="_blank"><img src="img/logovk.jpg"></a>
				<a href="https://www.youtube.com/channel/UCM_Hji2yZgA3dvwux-vsv8g" title="Наш канал на YouTube" target="_blank"><img src="img/logoyoutube.png"></a>
			</div>
			<div class="share_blocks">
				<div class="share">
					<a href="http://www.facebook.com/sharer/sharer.php?url=http://grandmebelperm.ru/" target="_blank"><img src="img/share_icon_fb.png"> Поделиться</a>
				</div>
				<div class="share"> 
					<a href="http://vk.com/share.php?url=http://grandmebelperm.ru/" target="_blank"><img src="img/share_icon_vk.png"> Поделиться</a>
				</div>
				<div class="share">
					<a href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=http://grandmebelperm.ru/" target="_blank"><img src="img/share_icon_odnoklassniki.png"> Поделиться</a>
				</div>
			</div>
		</div>
		<div class="redline"></div>
		<div class="footer_container">
			<div class="footer_info">
				<div class="footer_logo">
					<a href="/">
						<img src="img/logoGM.png">
					</a>
				</div>
				<div class="footer_contacts">
					<?php
						$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 5');
						while ($r1 = mysqli_fetch_assoc ($result)) {
					?>
					<a href=<?php echo $r1['href']; ?>>
						<em class="fa fa-home">&#160 г. Пермь, ул. Свиязева, 39 <br>(ТЦ "Терра-Интерьера", 2 этаж)</em><br>
						<em class="fa fa-phone">&#160 8 908 274 90 69 - Ирина</em><br>
						<em class="fa fa-phone">&#160 8 909 106 81 87 - Кристина</em><br>
						<em class="fa fa-envelope-o">&#160 grandmebelperm@mail.ru</em><br>
						<br>
						Время работы: ПН-ВС 10:00-19:00
					</a>
					<?php } ?>
				</div>
			</div>
			<div class="redline" id="redline_800px"></div>
			<div class="footer_nav">
				<div class="footer_header_nav">
					<?php 
						$result = mysqli_query ($connection, 'SELECT * FROM footer_nav');
						while ($r1 = mysqli_fetch_assoc ($result)) {
					?>
					<ul>
						<li>
							<a href=<?php echo $r1['href']; ?>><!--<em class="fa fa-leaf"></em>&#160--><?php echo $r1['title']; ?></a>
						</li>
					</ul>
					<?php
						}
					?>
				</div>
				<div class="redline" id="redline_800px"></div>
				<div class="footer_product_nav">
					<?php 
						$result = mysqli_query ($connection, 'SELECT * FROM product_nav');
						while ($r1 = mysqli_fetch_assoc ($result)) {
					?>
					<ul>
						<li>
							<a href=<?php echo $r1['href']; ?>><!--<em class="fa fa-leaf"></em>&#160--><?php echo $r1['title']; ?></a>
						</li>
					</ul>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<div class="platform">
			<div>
				<?php 
					$result = mysqli_query ($connection, 'SELECT * FROM header_nav WHERE id = 6');
					while ($r1 = mysqli_fetch_assoc ($result)) {
				?>
				© 2017-2019 Мебельный салон "Гранд-мебель" (ТЦ "Терра-Интерьера")<br>
				<a href=<?php echo $r1['href']; ?>>
					<?php echo $r1['title']; ?>
				</a>
				<?php
					}
				?>
			</div>
			<div class="producer_control">
				<a href="" title="">
					<img src="img/LRS.jpg">
				</a>
			</div>
		</div>
		
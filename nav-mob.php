<div>
	<div>
		<ul>
			<li><a href="/">Главная</a></li>
			<?php
				$result = mysqli_query ($connection, 'SELECT * FROM header_nav');
				while ($r1 = mysqli_fetch_assoc ($result)) { ?>
			<li>
				<a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a>
			</li><?php } ?>
		</ul>
	</div>
	<div>
		<ul>
			<?php
				$result = mysqli_query ($connection, 'SELECT * FROM product_nav');
				while ($r1 = mysqli_fetch_assoc ($result)) { ?>
			<li>
				<a href=<?php echo $r1['href']; ?>><?php echo $r1['title']; ?></a>
			</li><?php } ?>
		</ul>
	</div>
</div>
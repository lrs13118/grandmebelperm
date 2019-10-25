		<nav class="product_nav">
			<ul class="menu">
				<?php
					$menu = mysqli_query ($connection, 'SELECT * FROM product_nav');
					while ($mm = mysqli_fetch_assoc ($menu)) {
				?>
				<li id=<?php echo $mm['identification']; ?> >
				<?php if ($mm['id'] != 1 and $mm['id'] != 14 and $mm['id'] != 41) { ?><a href=container.php?id=<?php echo $mm['id']; ?>><?php } ?>
				<?php if ($mm['id'] == 1) { ?><a href=sale.php><?php } ?>
				<?php if ($mm['id'] == 14) { ?><a href=wardrobes.php><?php } ?>
				<?php if ($mm['id'] == 41) { ?><a href=other.php><?php } ?>
				<?php echo $mm['title']; ?></a>
				</li>
				<?php } ?>
			</ul>
		</nav>

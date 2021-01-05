<?php require('elements/header.php'); ?>

<div class="page-content">
	<?php
	  if ($c->getCollectionAttributeValue('color')) {
	  	$color = $c->getCollectionAttributeValue('color');
	  }
	?>
	<div class="hero <?php echo $color ?>">
		<?php
			$a = new Area("Hero Image");
			$a->display();
		?>
	</div>
	<div class="mobile-hero <?php echo $color ?>">
		<?php
			$a = new Area("Mobile Hero Image");
			$a->display();
		?>
	</div>
	<div class="container">
		<div class="main-content">
				<?php
					$a = new Area("Main Page Content");
					$a->display();
				?>
			<div class="image-row">
				<?php
					$a = new Area("CTA Row 1");
					$a->display();
				?>
			</div>
			<div class="image-row">
				<?php
					$a = new Area("CTA Row 2");
					$a->display();
				?>
			</div>
		</div>
	</div>
</div>

<?php require('elements/footer.php'); ?>

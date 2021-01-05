<?php require('elements/header_internal.php'); ?>

<div class="page-content sidebar">
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
		</div>
		<div class="right-sidebar">
			<?php
					$a = new Area("Other Sections");
					$a->display();
				?>
		</div>

	</div>
</div>

<?php require('elements/footer.php'); ?>

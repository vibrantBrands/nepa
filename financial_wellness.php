<?php require('elements/header.php'); ?>

<div class="page-content sidebar">
	<div class="hero">
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
		<div class="right-sidebar cta-area">
			<a href="https://fmc.cusonet.com/nepa/staff/matthew-d-birnbaum/" class="cta green desktop" target="_blank">
				<i class="fas fa-calendar-alt"></i>
				<p>Schedule an Appointment!</p>
			</a>
			<a href="tel:8773373399" class="cta green">
				<i class="fas fa-phone"></i>
				<p>Greenpath Financial<br />
					<span>(877) 337-3399</span>
				</p>
			</a>
		</div>

	</div>
</div>

<?php require('elements/footer.php'); ?>

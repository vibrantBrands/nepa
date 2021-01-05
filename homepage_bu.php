<?php require('elements/header.php'); ?>

<div class="homepage">
	<div class="hero">
		<img src="<?php echo $this->getThemePath(); ?>/img/nepa-logo.png" alt="NEPA logo" class="logo">
		<!-- <img src="<?php echo $this->getThemePath(); ?>/img/nepa-18-72868.png" alt="Testimony" class="background">  -->
	</div>
	<div class="tagline">
		Leading the way in virtual banking.
	</div>
	<div class="container">
	   <div class="image-row">
		<div>
			<a href="/home-banking">
			<?php
				$a = new Area("Image 1");
				$a->display();
			?>
			
				<h2 class="blue"><i class="fas fa-laptop-house"></i> At Home Banking</h2>
			</a>
		</div>
		<div>
			<a href="/memberships-and-loans">
				<?php
					$a = new Area("Image 2");
					$a->display();
				?>
				<h2 class="violet"><i class="fas fa-sack-dollar"></i> Membership & Loans</h2>
			</a>
		</div>
		<div>
			<a href="https://mortgages.cumortgage.net/default.asp?siteId=E8F231BB-3990-4240-9259-0258158740B2" target="_blank">
				<?php
					$a = new Area("Image 3");
					$a->display();
				?>
				<h2 class="teal"><i class="fas fa-home"></i> Mortgages</h2>
			</a>
		</div>
		<div>
			<a href="https://www.nepafcuautobuying.org" target="_blank">
				<?php
					$a = new Area("Image 4");
					$a->display();
				?>
				<h2 class="orange"><i class="fas fa-car"></i> Auto Buying Center</h2>
			</a>
		</div>
		<div>
			<a href="/financial-wellness">
				<?php
					$a = new Area("Image 5");
					$a->display();
				?>
				
				<h2 class="lt-green"><i class="fas fa-hands-usd"></i> Financial Wellness</h2>
			</a>
		</div>
		<div>
			<a href="/disclosures">
				<?php
					$a = new Area("Image 6");
					$a->display();
				?>
				<h2 class="purple"><i class="fas fa-question-square"></i> Disclosures & Other Services</h2>
			</a>
		</div>
	   </div>
	</div>

</div>

<?php require('elements/footer.php'); ?>

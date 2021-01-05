<?php require('elements/header.php'); ?>

<div class="homepage">
	<div class="hero">
		<img src="<?php echo $this->getThemePath(); ?>/img/nepa-logo.png" alt="NEPA logo" class="logo">
	</div>
	<div class="tagline">
		Leading the way in virtual banking.
	</div>
	<div class="container">
	   <div class="image-row">
		<div>
			<a href="/home-banking">	
				<img src="<?php echo $this->getThemePath(); ?>/img/at-home-banking.png" alt="Anytime Banking" />		
				<h2 class="blue"><i class="fas fa-laptop-house"></i>Anytime Banking</h2>
			</a>
		</div>
		<div>
			<a href="/memberships-and-loans">
				<img src="<?php echo $this->getThemePath(); ?>/img/membership-banking.png" alt="Membership Banking" />	
				<h2 class="violet"><i class="fas fa-sack-dollar"></i> Membership & Loans</h2>
			</a>
		</div>
		<div>
			<a href="https://mortgages.cumortgage.net/default.asp?siteId=E8F231BB-3990-4240-9259-0258158740B2" target="_blank">
				<img src="<?php echo $this->getThemePath(); ?>/img/mortgages.png" alt="Home Banking" />	
				<h2 class="teal"><i class="fas fa-home"></i> Mortgages</h2>
			</a>
		</div>
		<div>
			<a href="https://www.nepafcuautobuying.org" target="_blank">
				<img src="<?php echo $this->getThemePath(); ?>/img/auto-buying-center.png" alt="Auto Buying Center" />	
				<h2 class="orange"><i class="fas fa-car"></i> Auto Buying Center</h2>
			</a>
		</div>
		<div>
			<a href="/financial-wellness">
				<img src="<?php echo $this->getThemePath(); ?>/img/financial-wellness.png" alt="Financial Wellness" />
				<h2 class="lt-green"><i class="fas fa-hands-usd"></i> Financial Wellness</h2>
			</a>
		</div>
		<div>
			<a href="/disclosures">
				<img src="<?php echo $this->getThemePath(); ?>/img/financial-wellness-copy.png" alt="Disclosures" />
				<h2 class="purple"><i class="fas fa-question-square"></i> Disclosures & Other Services</h2>
			</a>
		</div>
	   </div>
	</div>

</div>

<?php require('elements/footer.php'); ?>

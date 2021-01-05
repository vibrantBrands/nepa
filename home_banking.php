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
			 <h1 class="blue"><i class="fas fa-laptop-house"></i> Anytime Banking</h1>
			 <div class="services">
			 	<div class="online-banking">
			 		<h2><i class="fas fa-user-unlock"></i> Online Banking</h2>
			 		<form name="loginForm" autocomplete="off" method="post" action="https://cm.netteller.com/login2008/Authentication/Views/Login.aspx?fi=nepacommunityfcu&amp;bn=9158e53852f0a60d&amp;burlid=43d6ce2b11c38d08">
						<div class="login-form-left group">
							<input type="text" name="id" id="id" class="login-field" autocomplete="off" placeholder="Enter User ID">
							<!--<label for="pin" class="second-login-label">Password</label>-->
							<input type="hidden" name="pin" id="pin" class="second-login-field" autocomplete="off">
							<div class="row">
								<div><a href="https://www.netteller.com/login2008/Authentication/Views/LoginPasswordSelfReset.aspx?fi=nepacommunityfcu&bn=9158e53852f0a60d&burlid=43d6ce2b11c38d08" target="offsite">Forgot Password</a>
                                </div>
								<div> <a href="https://www.netteller.com/login2008/Authentication/Views/OnlineEnrollmentAgreement.aspx?returnUrl=%2fnepacommunityfcu" target="offiste">Sign Up</a></div>
								<div>	<input type="submit" name="submitButton" id="submitButton" class="login-submit" value="Let's Go"></div>
							</div>
						</div>
					</form>
			 	</div>
			 	<div class="button-wrapper">
				 	<a href="https://www.netteller.com/login2008/Authentication/Views/OnlineEnrollmentAgreement.aspx?returnUrl=%2fnepacommunityfcu" target="_blank" class="cta blue">
						<i class="fas fa-phone-laptop"></i>
						<p>Online Banking Signup
						</p>
					</a>
					<a href="https://videobanking.nepafcu.org/join" target="_blank" class="cta blue">
						<i class="fas fa-video"></i>
						<p>Start Video Banking
						</p>
					</a>
				</div>
			 </div>
			 <!-- end services block -->

			 <section class="info">
			 	<div class="hours">
			 		<h2 class="blue">Wherever you are, we’re with you!</h2>
					<p>Open accounts, apply for loans, and get answers to account questions via smartphone, tablet or computer.</p> 
					
					<p><strong>Available 8:30 am to 5:00 pm, Monday through Friday, and 8:30 am to 12:00 pm on Saturday. </strong></p>

					<p>Take Control of Your Finances with GreenPath Financial Wellness. Access resources, talk to a financial wellness coach or help manage your debt – GreenPath is here to help NE PA FCU Members. For more information, <strong>call (877) 337-3399.</strong></p>
								 	</div>
			 	<div class="app-buttons">
			 		<a href="https://play.google.com/store/apps/details?id=com.fi7302.godough" target="_blank">
			 			<img src="<?php echo $this->getThemePath(); ?>/img/google-play.png" alt="Google Play" class="app">
			 		</a>
			 		
			 		<a href="https://apps.apple.com/us/app/ne-pa-community-fcu-mobile/id873107025" target="_blank">
			 			<img src="<?php echo $this->getThemePath(); ?>/img/apple-store.png" alt="Apple Store" class="app">
			 		</a>
			 	</div>
			 </section>
		</div>
	</div>
	<section class="banking-on-the-go">
	 	<div class="container">
	 		<div class="text">
	 			<h2><i class="fas fa-house-leave"></i> Banking on the Go</h2>
	 			<p>
	 				Teller-assisted Transactions 
	 				<br /><span>Integrated Teller Machine (ITM)</span>
	 			</p>
	 			<p>During regular business hours, use an ITM to speak with a teller via real-time video to:
	 				<ul>
	 					<li>Make Deposits</li>
	 					<li>Get Cash</li>
	 					<li>Pay Loans</li>
	 					<li>Check Balances</li>
	 				</ul>
	 			</p>
	 		</div>
	 	</div>
	 </section>
	 <section class="locations">
	 	<div class="container">
	 		<div><h2><i class="fas fa-map-marker-alt"></i> ITM Locations</h2></div>
	 		<div>
	 			<h3><i class="fas fa-map-marker-alt"></i> Mt. Pocono</h3>
				<strong>1235 Pocono Boulevard,<br />
				Mt. Pocono, PA 18344</strong><br />
				(Belmont Plaza)<br />
			    <small>(You will need a magnetic stripe card to access the vestibule.)</small>
		    </div>
	 		<div>
	 			<h3><i class="fas fa-map-marker-alt"></i> Brodheadsville</h3>
				<strong>107 Kinsley Drive,<br />
				Brodheadsville, PA 18322</strong><br />
				<small>(inside Kinsley’s Family Market — near the Pharmacy)</small>
			</div>
	 		<div>
	 			<h3><i class="fas fa-map-marker-alt"></i> Stroudsburg</h3>
				<strong>337 Clay Ave.,<br />
				Stroudsburg, PA 18360</strong><br />
				<small>(Main Branch lobby and drive-thru)</small>
	 		</div>
	 	</div>
	 </section>
</div>

<?php require('elements/footer.php'); ?>

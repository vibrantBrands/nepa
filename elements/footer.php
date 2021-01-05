<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
    <div class="container">
        <div class="logo">
            <img src="<?php echo $this->getThemePath(); ?>/img/footer-logo.png" alt="NEPA Logo" />
            <p class="routing">Routing # 231386221</p>
        </div>
        <div class="badges">
            <img src="<?php echo $this->getThemePath(); ?>/img/ehl.png" alt="EHL" />
            <img src="<?php echo $this->getThemePath(); ?>/img/ncua.png" alt="NCUA" class="ncua" />
        </div>
        <div class="social">
            <div>
                <a href="https://www.facebook.com/nepafcu" target="social">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
             <div>
                <a href="http://www.twitter.com" target="social">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div>
                <a href="http://https://www.youtube.com/channel/UC0nl137uOJkJHaFEtF8s-rw" target="social">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div>
                <a href="https://www.instagram.com/nepafcu/" target="social">
                    <i class="fab fa-instagram"></i>
                </a>
                
            </div>
        </div>
        <div class="contact">
            <a href="mailto:support@taliho.com"><i class="fa fa-map-marker-alt"></i> 337 Clay Avenue<br /> &nbsp;&nbsp;&nbsp;&nbsp;Stroudsburg, PA 18360</a>
            <a href="tel:1570421-5585"><i class="fa fa-phone"></i>(570) 421-5585</a></div>
        
    </div>
    <div class="container copyright">
        <p>&copy; 2020 NE PA Community Federal Credit Union. All rights reserved. This credit union is federally insured by the National Credit Union Administration.</p>
    </div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>

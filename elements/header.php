<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

  <header>
    <div class="navigation">
      <!-- mobile menu -->
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
      </div> 

      <div class="hours">
        <?php
        $a = new Area("Header Message");
        $a->display();
      ?>
      </div>

      <div class="logo-box">
        <a href="/">
          <img src="<?php echo $this->getThemePath(); ?>/img/header-logo.png" alt="NEPA Logo">
        </a>
      </div>

      <ul class="nav">
        <li>
          <a href='/home-banking'><i class="fas fa-laptop-house"></i> At Home Banking</a>
        </li>
        <li>
           <a href='/memberships-and-loans'><i class="fas fa-sack-dollar"></i> Membership & Loans</a>
         </li>
        <li>
          <a href='https://mortgages.cumortgage.net/default.asp?siteId=E8F231BB-3990-4240-9259-0258158740B2' target="_blank"><i class="fas fa-home"></i> Mortgages</a>
        </li>
        <li>
          <a href='https://www.nepafcuautobuying.org' target="_blank"><i class="fas fa-car"></i> Auto Buying Center</a>
        </li>
        <li>
          <a href='/financial-wellness'><i class="fas fa-hands-usd"></i> Financial Wellness</a>
        </li>
        <li>
          <a href='/disclosures-other-services'><i class="fas fa-question-square"></i>More</a>
        </li>
      </ul>
      <div class="cta-box">
        <div class="online-banking">
            <i class="fas fa-user-unlock"></i>
            Online Banking
            <div class="login-box">
              <form name="loginForm" autocomplete="off" method="post" action="https://cm.netteller.com/login2008/Authentication/Views/Login.aspx?fi=nepacommunityfcu&amp;bn=9158e53852f0a60d&amp;burlid=43d6ce2b11c38d08" target="offiste">
                <div class="login-form-left group">
                  <input type="text" name="id" id="id" class="login-field" autocomplete="off" placeholder="Enter User ID">
                  <input type="hidden" name="pin" id="pin" class="second-login-field" autocomplete="off">
                  <div class="two-col">
                    <div><a href="https://www.netteller.com/login2008/Authentication/Views/LoginPasswordSelfReset.aspx?fi=nepacommunityfcu&bn=9158e53852f0a60d&burlid=43d6ce2b11c38d08" target="offsite">Forgot Password</a><br />
                      <a href="https://www.netteller.com/login2008/Authentication/Views/OnlineEnrollmentAgreement.aspx?returnUrl=%2fnepacommunityfcu" target="offiste">Sign Up</a></div>
                    <div><input type="submit" name="submitButton" id="submitButton" class="login-submit" value="Let's Go"></div>
                  </div>
                  
                </div>
              </form>
            </div>
        </div>
      </div>
        <!-- <?php   
              $bt = BlockType::getByHandle('autonav');
              $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
              //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
              $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
              $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'
              $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
              $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
              $bt->render('templates/main_nav'); // for template 'templates/template_name';
              ?> -->
    </div>
  </header>

<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

  <header class="internal">
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
          <a href="/home-banking">
            <i class="fas fa-user-unlock"></i>
            Online Banking
          </a>
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

<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="keywords" content=""

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
          <div class="sub-header">
              <div class="header-top">
                  <div class="container">
                     <div class="row">
                         <div class="col-xs-6 col-xs-offset-6 left-section">
                              <div class="social">
                                  <div class="get-social-mobile"><h4>Get Social</h4></div>
                                  <div class="hide-on-mibile">
                                      <ul class="social-links">
                                          <li><a href="https://www.facebook.com/profile.php?id=100001608943503" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="https://vk.com/club58595869" target="_blank"><i class="fa fa-vk"></i></a></li>
                                          <li><a href="https://www.instagram.com/vadim_bakov/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                     </div>
                  </div>
              </div>
              <div class="header-middle-section">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-7 col-sm-6 col-xs-9 left-section"> 
                              <a href="/" class="clearfix">
                                  <img class="logo left" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="Logo">
                                  <div>
                                      <p>Вадим Баков</p>
                                      <p>Пластическая хирургия доктора Бакова</p>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-5 col-sm-6 col-xs-3 right-section">
                              <div class="phone-number">
                                  <h3><a href="tel:<?php echo str_replace(array(" ", "(", ")"), "", ot_get_option('phone')) ?>"><i class="fa fa-phone"></i>  <?php echo ot_get_option('phone'); ?></a>
                                  </h3>	
                              </div>
                              <div class="mobile-menu-btn-container">
                                  <div id="nav-icon3" class="hidden-lg hidden-md mobile-menu-btn ">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                  </div>
                                  <div class="visible"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="menu-container">
             <nav>
                 <?php ubermenu( 'main' , array( 'theme_location' => 'main_menu' ) ); ?>
             </nav>
          </div>
      </header>
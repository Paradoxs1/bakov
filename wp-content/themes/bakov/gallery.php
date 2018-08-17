<?php
/*
Template name: Gallery
*/
get_header(); ?>

<div class="page-content">
        <div class="page-banner" style="background-image: url('<?php the_post_thumbnail_url('full' ); ?>');" id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-12 banner-content">
                        <h2>Фотогалерея</h2>						
                    </div>
                </div>
            </div>				  
        </div>
        <div class="breadcrumbs-container">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12">
                        <span class="bread-location">Вы здесь:</span><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                    </div>
                </div>
            </div>
         </div>
        <div class="page-main-container">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-12">
                      <div class="gallery-block">
                          <div class="gallery-img">
                              <img src="<?php bloginfo( 'template_url' ); ?>/img/gallery-img.jpg" alt="">
                          </div>
                          <h3>Пластика груди</h3>
                          <?php wp_nav_menu( array(
                            'theme_location'  => 'menu_boobs',
                            'menu'            => '', 
                            'container'       => false, 
                            'container_class' => '', 
                            'container_id'    => '',
                            'menu_class'      => '', 
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                           ) ); ?>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                      <div class="gallery-block">
                          <div class="gallery-img">
                              <img src="<?php bloginfo( 'template_url' ); ?>/img/gallery-img2.jpg" alt="">
                          </div>
                          <h3>Пластика лица</h3>
                          <?php wp_nav_menu( array(
                            'theme_location'  => 'menu_face',
                            'menu'            => '', 
                            'container'       => false, 
                            'container_class' => '', 
                            'container_id'    => '',
                            'menu_class'      => '', 
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                           ) ); ?>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                      <div class="gallery-block">
                          <div class="gallery-img">
                              <img src="<?php bloginfo( 'template_url' ); ?>/img/gallery-img3.jpg" alt="">
                          </div>
                          <h3>Пластика тела</h3>
                          <?php wp_nav_menu( array(
                            'theme_location'  => 'menu_body',
                            'menu'            => '', 
                            'container'       => false, 
                            'container_class' => '', 
                            'container_id'    => '',
                            'menu_class'      => '', 
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                           ) ); ?>
                      </div>
                  </div>
              </div>
          </div>
        </div>
     </div>

<?php get_footer();
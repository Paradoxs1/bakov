<?php
/*
Template name: Doctor
*/
get_header(); ?>

<div class="page-content">
        <div class="page-banner" style="background-image: url('<?php the_post_thumbnail_url('full' ); ?>');" id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-12 banner-content">
                        <h2><?php the_title(); ?></h2>			
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
                 <div class="col-lg-8 col-md-8 col-sm-12 left-section">
                     <?php  the_post();
                            the_content();
                   
                         if (function_exists( 'ot_get_option' )){
                            $images = explode( ',', get_post_meta( get_the_ID(), 'gallery', true ) );
                                if (!empty( $images ) ) {
                            ?>
                           <div class="gallery">
                             <?php
                              foreach( $images as $id ) {
                                  if ( ! empty( $id ) ) {
                              $full_img_src = wp_get_attachment_image_src( $id, '' );
                                  echo '<a href="' . $full_img_src[0] . '" data-sourse="' . $full_img_src[0] . '"><img src="' . $full_img_src[0] . '"/></a>';
                                          }
                                      }
                              ?>
                            </div>
                       <?php }} ?>
                      
                      <?php if(is_page(46)): ?>
                          <h2>Статьи, публикации в СМИ</h2>
                          <div class="info-container">
                          <?php query_posts('category_name=press');
                                if(have_posts()) { ?>
                                <?php while(have_posts()): the_post(); ?>
                                   
                                    <div class="info-block">
                                        <a href='<?php echo get_the_excerpt(); ?>'><?php the_title(); ?></a>
                                        <?php the_content(); ?>
                                        <?php the_post_thumbnail('full'); ?>
                                     </div>
                                     
                                <?php  endwhile; wp_reset_query(); } ?>
                         </div>
                      <?php endif; ?>
                      
                      <?php if(is_page(44)): ?>
                          <h2>Эфиры, отрывки передач со мной</h2>
                          <div class="info-container">
                          <?php query_posts('category_name=video');
                                if(have_posts()) { ?>
                                <?php while(have_posts()): the_post(); ?>
                                   
                                    <div class="info-block">
                                        <div class="video-block"><?php echo get_the_excerpt(); ?></div>
                                        <a><?php the_title(); ?></a>
                                        <?php the_content(); ?>
                                     </div>
                                     
                                <?php  endwhile; wp_reset_query(); } ?>
                         </div>
                      <?php endif; ?>
                          
                  </div>
                <div class="col-lg-4 col-md-4 col-sm-12 right-section">
                      <?php get_sidebar(); ?>
                  </div>
              </div>
          </div>
        </div>
     </div>

<?php get_footer();
<?php
/*
Template name: Article
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
                      ?>
                      <h3>Отзывы пациентов</h3>
                      <div class="testimonials">
                          <div class="testomonial-container">
                              <div class="media-slider-container">
                                  <div class="slider-testimonials">
                                     <?php query_posts('category_name=review');
                                      if(have_posts()) { ?>
                                      <?php while(have_posts()): the_post(); ?>
                                         <div>
                                          <div class="item">
                                              <div class="video-false-container clearfix">
                                                  <div class="left">
                                                      <?php the_post_thumbnail('full'); ?>

                                                  </div>
                                                  <div class="testimonials-content">
                                                      <?php the_content(); ?>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <?php  endwhile; wp_reset_query(); } ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php
                        if(get_post_meta($post->ID, 'price_text', true)){
                          echo get_post_meta($post->ID, 'price_text', true);
                        }
                   
                        if(get_post_meta($post->ID, 'questions_text', true)){
                          echo get_post_meta($post->ID, 'questions_text', true);
                        }
                      ?>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 right-section">
                      <?php get_sidebar(); ?>
                  </div>
              </div>
          </div>
        </div>
     </div>

<?php get_footer();
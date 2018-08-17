<?php
/*
Template name: Reviews
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
                  <div class="review">
                     <?php 
                      $paged = (get_query_var('paged'))? get_query_var('paged'): 1;
                      query_posts('category_name=reviews-patients&paged=' . $paged);
                        if(have_posts()) { ?>
                        <?php while(have_posts()): the_post(); ?>
                           <div class="review-block clearfix">
                                <div class="left">
                                    <img src="<?php the_post_thumbnail_url('full' ); ?>" alt="">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="review-right">
                                    <h2><?php echo get_the_excerpt(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <nav class="pagination" id="pagination">
                          <?php wp_corenavi(); wp_reset_query(); } ?>   
                        </nav>
                   </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 right-section">
                  <?php get_sidebar(); ?>
              </div>
          </div>
      </div>
    </div>
</div>

<?php get_footer();
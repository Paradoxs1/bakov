<?php get_header(); ?>
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
                  <?php while(have_posts()): the_post();
				    the_content();

                    endwhile; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 right-section">
                  <?php get_sidebar(); ?>
              </div>
          </div>
      </div>
    </div>
</div>

<?php get_footer();
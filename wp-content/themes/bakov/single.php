<?php get_header(); ?>

  <div class="page-content">
    <div class="page-banner" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/img/contact-banner.jpg');" id="slider">
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
                  <?php if(have_posts()): 
                    the_post(); 
                  ?>
                  <div class="gallery-image">
                      <a href="<?php the_post_thumbnail_url('full' ); ?>" data-source="<?php the_post_thumbnail_url('full' ); ?>">
                          <img src="<?php the_post_thumbnail_url('full' ); ?>">
                      </a>
                  </div>
                  <?php
                  
                    if(has_category(array('brace','nipple', 'brace_endo', 'all_boobs'), $post_id)){
                       ?>
                         <div class="view-img">
                             <a href="#"><span>Смотреть оригинал</span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
                             <div class="gallery-image">
                                <a href="<?php bloginfo( 'template_url' ); ?>/img/<?php echo get_post_meta($post->ID, 'img_src', true);?>" data-source="<?php bloginfo( 'template_url' ); ?>/img/<?php echo get_post_meta($post->ID, 'img_src', true);?>">
                                    <img src="<?php bloginfo( 'template_url' ); ?>/img/<?php echo get_post_meta($post->ID, 'img_src', true);?>">
                                </a>
                             </div>
                         </div>
                       <?php
                    };
				    the_content();
                    
                    endif; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 right-section">
                  <?php get_sidebar(); ?>
              </div>
          </div>
      </div>
    </div>
</div>
<?php get_footer();

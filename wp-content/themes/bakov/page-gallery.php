<?php
/*
Template name: Gallery-page
*/
get_header(); ?>

<div class="page-content page-gallery-content">
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
                       <?php if(is_page(195)): ?>
                        <form method="post" class="gallery-filter" action="">
                            <input type="submit" value="Все объемы" name="all_boobs" class="submit">
                            <input type="submit" value="215-255" name="smaller_boobs" class="submit">
                            <input type="submit" value="280-295" name="small_boobs" class="submit">
                            <input type="submit" value="320-335" name="medium_boobs" class="submit">
                            <input type="submit" value="360-375" name="big_boobs" class="submit">
                            <input type="submit" value="385 и более" name="biggest_boobs" class="submit">
                        </form>
                        <?php endif; ?>
                        
                        <div class="gallery-inner-container">
                        <?php
                          $paged = (get_query_var('paged'))? get_query_var('paged'): 1;
                          $rub = get_post_meta($post->ID, 'slug_text', true);
                          
                          $all_boobs = $_POST['all_boobs'];
                          $smaller_boobs = $_POST['smaller_boobs'];
                          $small_boobs = $_POST['small_boobs'];
                          $medium_boobs = $_POST['medium_boobs'];
                          $big_boobs = $_POST['big_boobs'];
                          $biggest_boobs = $_POST['biggest_boobs'];
                          
                          $r = "all_boobs";
                          if(isset($all_boobs)){
                            $r = "all_boobs";
                          }elseif(isset($smaller_boobs)){
                            $r = "smaller_boobs";
                          }elseif(isset($small_boobs)){
                            $r = "small_boobs";
                          }elseif(isset($medium_boobs)){
                            $r = "medium_boobs";
                          }elseif(isset($big_boobs)){
                            $r = "big_boobs";
                          }elseif(isset($biggest_boobs)){
                            $r = "biggest_boobs";
                          }
                          
                         

                          if(isset($r)){
                            query_posts("category_name=$r&paged=" . $paged);
                          }else{
                            query_posts("category_name=$rub&paged=" . $paged);
                          }
                          
                          
                            if(have_posts()) { ?>
                            <?php while(have_posts()): the_post(); ?>
                           <div class="gallery-inner-block">
                              <span class="g-left">До</span>
                              <span class="g-right">После</span>
                              <img src="<?php the_post_thumbnail_url('full' ); ?>" alt="">
                            </div>
                            <a href="<?php echo get_permalink(); ?>">Подробнее <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
                          <?php endwhile; ?>
                        </div>
                        <nav class="pagination" id="pagination">
                            <?php wp_corenavi(); wp_reset_query(); } ?>   
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 right-section" data-atribute="<?php echo $r; ?>">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer();
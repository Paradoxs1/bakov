<?php
/*
Template name: Patients
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
                            the_content(); ?>
                      
                      <?php if(is_page(28)): ?>
                          <div class="accordeon-container">
                              <section class="accordeon-block accordeon-block1">
                          <?php query_posts('category_name=info');
                                if(have_posts()) { ?>
                                <?php while(have_posts()): the_post(); ?>
                                   <p><?php the_title(); ?></p>
                                   <div><?php the_content(); ?></div>
                                <?php  endwhile; wp_reset_query(); } ?>
                            </section>
                         </div>
                         <p class="patients-quest impt"><?php echo ot_get_option('content_text'); ?></p>
                      <?php endif; ?>
                      
                      <?php if(is_page(80)): ?>
                         <div class="faq">
                            <div class="accordeon-big">
                                <p>Вопросы по пластике груди</p>
                                <div>
                                    <section class="accordeon">
                                    <?php query_posts('category_name=quest_boobs');
                                      if(have_posts()) { ?>
                                      <?php while(have_posts()): the_post(); ?>
                                         <p><?php the_title(); ?></p>
                                         <div><?php echo get_the_content(); ?></div>
                                      <?php  endwhile; wp_reset_query(); } ?>
                                      </section>
                                  </div>
                                  <p>Вопросы по пластике тела</p>
                                  <div>
                                      <section class="accordeon">
                                      <?php query_posts('category_name=quest_body');
                                      if(have_posts()) { ?>
                                      <?php while(have_posts()): the_post(); ?>
                                         <p><?php the_title(); ?></p>
                                         <div><?php echo get_the_content(); ?></div>
                                      <?php  endwhile; wp_reset_query(); } ?>
                                      </section>
                                    </div>
                                    <p>Вопросы по пластике лица</p>
                                    <div>
                                        <section class="accordeon">
                                        <?php query_posts('category_name=quest_face');
                                      if(have_posts()) { ?>
                                      <?php while(have_posts()): the_post(); ?>
                                         <p><?php the_title(); ?></p>
                                         <div><?php echo get_the_content(); ?></div>
                                      <?php  endwhile; wp_reset_query(); } ?>
                                      </section>
                                </div>
                            </div>
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
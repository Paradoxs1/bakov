<?php get_header(); ?>
	<div class="slider-main-container clearfix">
        <div class="slider first-slider" id="slider">
            <?php 
                $q = new WP_Query('post_type=slider');
                if($q->have_posts()){
                    while($q->have_posts()): $q->the_post(); ?>
                    <div>
                        <div class="item" style="background-image: url('<?php the_post_thumbnail_url('full' ); ?>')">
                            <div class="layer"></div>
                            <div class="container">
                                <div class="h2-container">
                                  <div class="small-text"><?php the_content(); ?></div>
                                  <h2 class="first-title"><?php the_title(); ?></h2>
                                  <h2><?php the_excerpt(); ?></h2>
                                  <div class="new-button inline-popups">
                                      <a href="#popup" data-effect="mfp-zoom-out">Записаться на консультацию<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; } ?>
          </div>
    </div>
    <div class="hightlights">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                      <nav>
                       <?php wp_nav_menu( array(
                        'theme_location'  => 'menu',
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
                      </nav>
                  </div>
              </div>
          </div>
      </div>
    <div class="doctor" id="doctor">
           <div class="container">
              <div class="row">
                  <div class="col-md-5 col-sm-12 left-section">
                      <img src="<?php bloginfo( 'template_url' ); ?>/img/bakov.png" alt="">
                   </div>
                   <div class="col-md-7 col-sm-12 right-section">
                       <div class="doctor-container">
                           <h3>пластическая хирургия <br><b>доктора бакова</b></h3>
                           <p><?php echo ot_get_option('doctor'); ?></p>
                           <div class="signature-container">
                               <img src="<?php bloginfo( 'template_url' ); ?>/img/bakov-img.png">
                               <img src="<?php bloginfo( 'template_url' ); ?>/img/bakov-img2.png">
                               <img src="<?php bloginfo( 'template_url' ); ?>/img/bakov-img3.jpg">
                               <img src="<?php bloginfo( 'template_url' ); ?>/img/bakov-img4.jpg">
                          </div>
                      </div>
                  </div>
              </div>
	      </div>
     </div>		
    <div class="in-the-media">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12 in-the-media-container">
                      <h3><b>Фото</b> до и после</h3>
                      <div class="media-slider-container">
                          <div class="slider-media">
                              <?php 
                                $g = new WP_Query('category_name=slider-foto');
                                if($g->have_posts()){
                                    while($g->have_posts()): $g->the_post(); ?>
                                    <div>
                                        <div class="item">				
                                            <?php the_post_thumbnail('full'); ?>
                                        </div>
                                    </div>
                              <?php endwhile; } ?>
                          </div>
                      </div>
                      <a href="#"><span>Смотреть все фото</span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
                  </div>
             </div>
		</div>
     </div>
    <div class="testimonials">
	    <div class="testomonial-container">
            <h3><b>Отзывы</b> пациентов</h3>
            <div class="media-slider-container">
                <div class="slider-testimonials">
                <?php 
                    $s = new WP_Query('category_name=review');
                    if($s->have_posts()){
                        while($s->have_posts()): $s->the_post(); ?>
                        <div>
                            <div class="item">
                                <div class="video-false-container clearfix">
                                    <div class="left">
                                        <?php the_post_thumbnail('full'); ?>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                    <div class="testimonials-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; } ?>
                </div>
                <a href="https://www.romoplasticsurgery.com/testimonials/">Все отзывы <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
            </div>
		</div>
    </div>
    <div class="affiliations-main-container clearfix">
        <div class="container-fluid">
            <div class="affiliations-logo clearfix">
                <div class="left">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/instagramm.png" alt="">
                </div>
                <div class="a-right">
                    <p>Доктор Баков и его пациентки всегда на связи в соц-сеях. Здесь вы можете узнать о последни операциях, увидеть живые фото и отзывы, задать вопросы и быстро получить ответ.</p>
                </div>
            </div>
            <div class="affiliations-logo-container">
                <div class="slider-affiliation">
                    <?php 
                    $s = new WP_Query('category_name=instagram');
                    if($s->have_posts()){
                        while($s->have_posts()): $s->the_post(); ?>
                    <div>
                        <div class="item">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </div>
                    <?php endwhile; } ?>
			   </div>
            </div>
        </div>
    </div>
    <div class="questions">
        <div class="container">
          <div class="row">
              <div class="col-xs-12">
                <h3><b>Вопросы</b> и ответы</h3>
                <section class="accordeon">
                    <?php 
                    $j = new WP_Query('category_name=faq');
                    if($j->have_posts()){
                        while($j->have_posts()): $j->the_post(); ?>
                        <p><span><?php the_title(); ?></span></p>
                        <div><?php the_content(); ?></div>
                    <?php endwhile; } ?>
                </section>
                <a href="#"><span>Все часто-задаваемые вопросы и ответы</span> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
              </div>
          </div>
        </div>
    </div>
    <div class="facebook">
        <div class="container">
            <div class="row">
                <div class="facebook-block">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/fb.jpg" alt="">
                    <a href="https://ru-ru.facebook.com/people/%D0%92%D0%B0%D0%B4%D0%B8%D0%BC-%D0%91%D0%B0%D0%BA%D0%BE%D0%B2/100001608943503" target="_blank"><span>Зайдите на мой Facebook</span> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us-container" id="contac-us">
	    <div class="tabs-top-container clearfix">
             <div class="container"> 
                 <h3><b>Записаться</b> на консультацию</h3>
                 <ul class="nav nav-tabs">
                    <li class="" data-toggle="tab" role="tab" href="#tab-1">
                        <div class="outer">
                             <a>Запись на консультацию <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "></polygon><g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g></svg></a>
                         </div>
                     </li>
                     <li class="" data-toggle="tab" role="tab" href="#tab-2">
                         <div class="outer">
                             <a>Скайп-консультация <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "></polygon><g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g></svg></a>
                          </div>
                      </li>
                      <li class="active" data-toggle="tab" role="tab" href="#tab-3">
                          <div class="outer">
                              <a>Задать вопрос <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "></polygon><g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g></svg></a>
                          </div>
                      </li>
                 </ul>
            </div>
            <div class="tab-content clearfix">
                <div class="tab-pane" id="tab-1">
	              <div class="container">
                     <div class="row">
                         <div class="col-xs-12">
                              <?php echo do_shortcode('[contact-form-7 id="323" title="Запись на консультацию"]'); ?>
                         </div>
                     </div>
	             </div>
              </div>
                <div class="tab-pane" id="tab-2">
                <div class="container">
                   <div class="row">
                      <div class="col-xs-12">
                         <?php echo do_shortcode('[contact-form-7 id="324" title="Скайп-консультация"]'); ?>
                       </div>  
                   </div>
               </div>
               </div>          
              <div class="tab-pane  active" id="tab-3">
              <div class="container">
                       <div class="row">
                        <div class="col-xs-12">
                            <?php echo do_shortcode('[contact-form-7 id="325" title="Задать вопрос"]'); ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>

<?php get_footer();
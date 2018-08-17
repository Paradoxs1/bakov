<?php if(post_password_required()){ return;} ?>

<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 left-section">
          <div class="review">
              <?php if(have_comments()): ?>
              <?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
              <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                  <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'test' ); ?></h2>
                  <div class="nav-links">
                      <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'test' ) ); ?></div>
                      <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'test' ) ); ?></div>
                  </div>
              </nav>
              <?php endif; ?>
              <ol class="comment-list">
                  <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
              </ol>
              <?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
              <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                  <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'test' ); ?></h2>
                  <div class="nav-links">
                      <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'test' ) ); ?></div>
                      <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'test' ) ); ?></div>
                  </div>
              </nav>
              <?php endif; 
                    endif;
                    if(!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
                    <p class="no-comments"><?php esc_html_e( 'Комментарии закрыты', 'test' ); ?></p>
             <?php endif; ?>
         </div>
     </div>
     <div class="col-lg-4 col-md-4 col-sm-12 right-section">
          <div class="sidebar">
              <div class="form-container clearfix">
                 <div class="form-title">
                     <h3>Оставить <b>отзыв</b></h3>
                 </div>
                 <div class="salesforce-form">
                      <?php $comments_args = array(
                          'title_reply'=>'',
                          'cancel_reply_after' =>'',
                          'comment_notes_after' => '',
                          'comment_field' => '<div class="col-md-6 col-sm-6 col-xs-12 form-group comments"><textarea id="comment" name="comment" aria-required="true" placeholder="Текст отзыва"></textarea></div>',
                          'label_submit' => 'Отправить',
                          'submit_field' => '<div class="col-md-6 col-sm-6 col-xs-12 form-group submit review-submit">%1$s %2$s <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>',
                          'comment_notes_before' => '',
                          'class_submit' => 'btn-send'
                      );
                      comment_form($comments_args);
                    ?>
                 </div>
              </div>
              <div class="second-section">
                  <div class="second-content clearfix inline-popups">
                      <img src="<?php bloginfo( 'template_url' ); ?>/img/scype.png">
                      <h4>Скайп-консультация</h4>
                      <p>Вы можете проконсультиррваться с доктором Баковым, не выходя из дома. Запишитесь на скайп-консультацию!</p>
                      <a href="#scype" data-effect="mfp-zoom-out"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                      </a>
                  </div>
                  <div class="second-content clearfix inline-popups">
                      <img src="<?php bloginfo( 'template_url' ); ?>/img/balov-call.jpg">
                      <h4>Заказать обратный звонок</h4>
                      <a href="#call" data-effect="mfp-zoom-out">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path><g> </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                      </a>
                  </div>
              </div>
        </div>
   </div>
</div>
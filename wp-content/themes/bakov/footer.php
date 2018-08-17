<?php ?>
<footer>
    <div class="container">
        <div class="row ">
           <div class="col-xs-12 clearfix">
              <div class="right f-right">
                   <span>Группы в соц. сетях:</span>
                   <ul>
                       <li><a href="https://www.facebook.com/profile.php?id=100001608943503" target="_blank"><i class="fa fa-facebook"></i></a></li>
                       <li><a href="https://vk.com/club58595869" target="_blank"><i class="fa fa-vk"></i></a></li>
                       <li><a href="https://www.instagram.com/vadim_bakov/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
                <div class="left f-left">
                   <p class="copy">&copy; 2017 – <?php echo date('Y'); ?> Пластический хирург Вадим Баков<br> Пластическая хирургия и косметология</p>
                   <?php echo do_shortcode('[addtoany]'); ?>
               </div>
           </div>
        </div>
    </div>
</footer>
<div id="popup" class="white-popup mfp-with-anim mfp-hide">
    <?php echo do_shortcode('[contact-form-7 id="326" title="Попап записаться на консультацию"]'); ?>
</div>
<div id="scype" class="white-popup mfp-with-anim mfp-hide">
    <?php echo do_shortcode('[contact-form-7 id="352" title="Попап скайп-консультация"]'); ?>
</div>
<div id="call" class="white-popup mfp-with-anim mfp-hide">
    <?php echo do_shortcode('[contact-form-7 id="353" title="Попап обратный звонок"]'); ?>
</div>
    
<?php wp_footer(); ?>

</body>
</html>

  <footer class="footer">
    <div class="container clearfix">
      <div class="footer-column">
        <div class="logo">
          <a href="/">
            <img src="<? bloginfo('template_directory') ?>/img/logo.png" height="34" alt="Студия дизайнов">
            <span>Студия</span>
            <p>Ремонтов</p>
          </a>
          <div class="logo-description">Ремонт квартир по приемлемым ценам</div>
        </div>
      </div>

      <!--<div class="hidden-sm footer-nav"
        <?php 

       $args = array(
          'theme_location'  => '',
          'menu'            => '',
          'container'       => 'ul',
          'container_class' => 'nav navbar-nav',
          'container_id'    => '',
          'menu_class'      => 'nav navbar-nav',
          'menu_id'         => 'footer-nav',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        );

        wp_nav_menu( $args ); ?> 
        
      </div>-->

      <div class="footer-column footer-column--right">
        <div class="social">
          <a href="https://vk.com/studia.remontov" class="social-item social-item--vk" target="_blank"></a>
          <a href="tg://resolve?domain=studia_remontov" class="social-item social-item--tg" target="_blank"></a>
          <a href="https://www.ok.ru/studia.remontov" class="social-item social-item--ok" target="_blank"></a>
          <a href="https://www.youtube.com/channel/UCgaeI3JqdmJLybxVul8IQDQ" class="social-item social-item--you" target="_blank"></a>
          <a href="https://www.facebook.com/studia.remontov/" class="social-item social-item--fb" target="_blank"></a>
        </div>
        <a href="#zvonok1" class="btn popup-with-form" id="callback-footer-btn">Обратный звонок</a>
      </div>
      <div id="zvonok1" class="form form-popup my-mfp-zoom-in mfp-hide">
        <h3 class="form-title">Закажите звонок<br> специалиста</h3>
        
        <form id="callback" onsubmit="yaCounter36767300.reachGoal ('main_buttoncall'); return true;" action="/zzzzerpolf23cvfdcva2gh.php" method="post">

          <div class="form-wrapper">
            <input type="text" class="form-input" name="name" value="" placeholder="Ваше имя">
          </div>  
          <div class="form-wrapper form-wrapper-margin">
            <input type="tel" class="form-input" name="phone" size="25" value="" placeholder="Ваш телефон">
            <input type="hidden" class="text" name="dop" value="Обратный звонок шапка">
            <? include 'inputs.php'; ?>
          </div>
          
          <button type="submit" class="form-button">Заказать звонок</button>
          
          <div class="form-privacy">* Оставляя заявку Вы даете согласие на обработку своих <a href="/privacy/" target="_blank">персональных данных.</a> Ваши данные не будут переданы 3м лицам.</div>
        </form>
      </div>    
    </div>
    
    <div class="copyright">© <?php echo date(Y); ?> ООО «Студия Ремонтов» <br> ИНН: 7743152366, ОГРН: 1167746404517 <br>Сайт не является публичной офертой и носит информационный характер.</div>
  </footer>   

<script src="<? bloginfo('template_directory') ?>/js/jquery-1.11.1.min.js"></script>
<script src="<? bloginfo('template_directory') ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<? bloginfo('template_directory') ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
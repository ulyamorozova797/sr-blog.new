<aside class="article__sidebar sidebar">
				<?php if ( ! dynamic_sidebar('sidebar-article') ) : ?>	
				<?php endif; ?>
         <!-- <div class="sidebar__rubrics">
            <h2>Содержание:</h2>
            <ul>
              <li><a href="#">Подзаголовок 1</a></li>
              <li><a href="#">Подзаголовок 2</a></li>              
            </ul>
        </div>-->

        <div class="posts__mailing mailing">                    
        	<h2>Подпишитесь на рассылку. Получайте самые свежие новости.</h2> 

        	<form action="https://studia-remontov.ru/zzzzerpolf23cvfdcva2gh.php" method="post">
        		<div class="mailing__wrapper">
        			<input type="text" class="mailing__input" name="name" id="contact_name" placeholder="Ваше имя">
        		</div>
        		<div class="mailing__wrapper mailing__wrapper--margin">  
        			<input type="email" class="mailing__input" name="mail" placeholder="Ваш E-mail">
        		</div>
        		<button type="submit" class="mailing__button">Подписаться</button>
        		<p>&#42; Оставляя заявку Вы даете согласие на обработку своих персональных данных.</p>
        		<input type="hidden" class="text" name="dop" value="Подпишитесь на рассылку">
		<? include 'inputs.php'; ?>       
        	</form> 
        </div>  

        <ul class="posts__social social">
        	<li>
        		<a class="social__link social__link--vk" href="https://vk.com/studia.remontov" target="_blank"></a>
        	</li>
        	<li>
        		<a class="social__link social__link--fb" href="https://www.facebook.com/studia.remontov/" target="_blank"></a>
        	</li>
        	<li>
        		<a class="social__link social__link--in" href="https://www.instagram.com/studia.remontov/" class="social-item social-item--tg" target="_blank"></a>
        	</li>
        	<li>
        		<a class="social__link social__link--ok" href="https://www.ok.ru/studia.remontov" target="_blank"></a>
        	</li>
        </ul>
    </aside>        
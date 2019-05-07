<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <!--<link rel="shortcut icon" href="../assets/img/favicon.ico" />-->
  <title>Блог компании "Студия ремонтов"</title>
<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory') ?>/css/style.css">
</head>
<body> 
  <header class="header" id="first-screen">
    <div class="navbar-fixed-top">
      <div class="container-fluid clearfix">
        <div class="pull-right">
          <div class="navbar-text">
            <a href="tel:+74954142230" class="calltracking"><span>+7 (495) 414-22-30</span></a>
            <p>без выходных 08:00-22:00</p>
          </div>
          <a href="#zvonok" class="form-button popup-with-form" id="callback-header-btn">Обратный звонок</a>
        </div>

        <div class="logo">
          <a href="/">
            <img src="<? bloginfo('template_directory') ?>/img/logo.png" height="34" alt="Студия дизайнов">
            <span>Студия</span>
            <p>Ремонтов</p>
          </a>
        </div>     
      </div>
      <!--  /.container  -->
    </div>
    <div id="zvonok" class="form form-popup my-mfp-zoom-in mfp-hide">
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
  </header>
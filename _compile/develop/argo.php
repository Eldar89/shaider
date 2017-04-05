
<?php /*
 Template Name: Агро
*/?><!DOCTYPE html>
<html lang="RU-ru">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.0.3/MarkerCluster.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.0.3/MarkerCluster.Default.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css">
  </head>
  <body><a name="topSite"></a>
    <section id="menu">
      <header>
        <div class="wrap container-own"><a href="/shaider/"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
          <div class="nums"><span>+7 700 <b>600 10 10</b></span><span>+7 700 <b>779 29 49</b></span><span>+7 7212 <b>79 29 49</b></span></div>
        </div>
      </header>
      <footer>
        <div class="wrap container-own">
          <nav><a href="/shaider/">Главная</a><a href="/shaider/services/">Услуги</a><a href="/shaider/projects/">Выполненные работы</a><a href="/shaider/#contact" class="anchor">Контакты</a></nav>
          <div class="sal">
            <div class="social"><a href="https://www.instagram.com/geomarksheyderr/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/inst.png"></a><a href="https://www.facebook.com/profile.php?id=100014247016132" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a><a href="https://vk.com/aerofotosemkag" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/vk.png"></a></div>
            <div class="lang"><span class="selected">RU</span><span><a href="#">KZ</a></span><span><a href="#">ENG</a></span></div>
          </div>
        </div>
      </footer>
    </section>
    <sections id="agro" class="header_subPage">
      <div class="container-own">
        <h3>Агрокомплекс и охрана природы</h3>
      </div>
    </sections>
    <section class="another_page">
      <div class="container-own">
        <div class="wrap_another"><a href="http://тест.kz/shaider/gos_sector/" class="another_block"><img src="<?php echo get_template_directory_uri();?>/images/2_services.jpg">
            <h3>Государственный сектор</h3></a><a href="http://тест.kz/shaider/nedrouser/" class="another_block"><img src="<?php echo get_template_directory_uri();?>/images/1_services.jpg">
            <h3>Недропользователь</h3></a><a href="http://тест.kz/shaider/building/" class="another_block"><img src="<?php echo get_template_directory_uri();?>/images/3_services.jpg">
            <h3>Промышленное и гражданское строительство</h3></a></div>
      </div>
    </section>
    <section class="subPage_content">
      <div class="container-own">
        <div class="wrap_content">
          <div class="info_block_left">
            <h3>Аэрофотосъемка:</h3>
            <ul>
              <li>Мониторинг водных ресурсов;</li>
              <li>Отслеживание уровня вод, паводков и зон затопления;</li>
              <li>Обследование гидротехнических сооружений;</li>
              <li>Оценка запасов лесных ресурсов;</li>
              <li>Обнаружение браконьерских вырубок, сухостоя и заболоченных зон;</li>
              <li>Мониторинг охраняемых территорий;</li>
              <li>Инвентаризация сельскохозяйственных угодий;</li>
              <li>Мониторинг состояния посевов;</li>
              <li>Расчет NDVI.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="feedback">
      <div class="form">
        <h3>Хотите получить скидку? Оставьте заявку</h3>
        <form>
          <label id="name_label">
            <input type="text" id="name_form" required placeholder="Ваше имя">
          </label>
          <label id="tel_label">
            <input type="tel" id="tel_form" required placeholder="Телефон">
          </label>
          <label id="mail_label">
            <input type="mail" id="email_form" required placeholder="E-mail">
          </label>
          <input type="submit" id="submit_form" value="Отправить">
        </form>
      </div>
    </section>
    <?php 
     $part = array(
       'post_type' => 'ready_object', //Тип поста
       'posts_per_page' => -1,//Постов на одной странице
       'category_name' => 'ready_object_agro' //Категория постов
     );
    ?>
    <section id="ready_projects">
      <div class="container-own">
        <h3 class="header">Выполненные работы</h3>
        <div class="projects">
          <?php
           $lastBlog = new WP_Query($part);
           if( $lastBlog->have_posts() ):
             while($lastBlog->have_posts() ): $lastBlog->the_post();
          ?>
              <?php $header = types_render_field( "name_readyobject", array('raw' => true) ); ?>
              <?php $date = types_render_field( "year_readyobject", array('raw' => true) ); ?>
              <?php $list_services = explode (';', types_render_field( 'def_readyobject', array('raw' => true) ) ); ?>
              <?php $list_slider = explode (' ', types_render_field( 'photo_readyobject', array('raw' => true) ) ); ?>
          <div class="elem_projects"><img src="<?php echo $list_slider[0]; ?>">
            <div class="toner"></div>
            <h3><?php echo $header; ?></h3><a href="http://xn--e1aybc.kz/shaider/projects/#<?php echo $header; ?>" class="link">перейти к работе</a>
          </div><?php
             endwhile;
           endif;
          ?>
        </div>
      </div>
    </section>
    <section id="menu" class="fix_menu">
      <footer>
        <div class="wrap container-own">
          <nav><a href="/shaider/">Главная</a><a href="/shaider/services/">Услуги</a><a href="/shaider/projects/">Выполненные работы</a><a href="/shaider/#contact" class="anchor">Контакты</a></nav>
          <div class="sal">
            <div class="social"><a href="https://www.instagram.com/geomarksheyderr/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/inst.png"></a><a href="https://www.facebook.com/profile.php?id=100014247016132" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a><a href="https://vk.com/aerofotosemkag" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/vk.png"></a></div>
            <div class="lang"><span class="selected">RU</span><span><a href="#">KZ</a></span><span><a href="#">ENG</a></span></div>
          </div>
        </div>
      </footer>
    </section>
    <footer id="footer">
      <div class="container-own">
        <div class="wrap">
          <h3>«Группа компаний комплексного инжиниринга» — 2017</h3>
          <div class="social"><a href="https://www.instagram.com/geomarksheyderr/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/inst_green.png" class="insta icon"></a><a href="https://www.facebook.com/profile.php?id=100014247016132" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook_green.png" class="facebook icon"></a><a href="https://vk.com/aerofotosemkag" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/vk_green.png" class="vk icon"></a></div><a href="http://mindpro-group.com" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/mind_logo.png"></a>
        </div>
      </div>
    </footer>
    <div id="mail" class="not_visible_mail"></div><script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/156564c23da9f60b4aab3e946e3efb4e/connect" id="check-code-pozvonim" charset="UTF-8"></script>
  </body>
</html>
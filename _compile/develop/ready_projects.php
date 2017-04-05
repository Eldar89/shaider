
<?php /*
 Template Name: Выполненные работы
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
    <?php
     $part = array(
       'post_type' => 'ready_object', //Тип поста
       'posts_per_page' => -1,//Постов на одной странице
       'category_name' => 'ready_object' //Категория постов
     );
    ?>
    <section id="projects_block">
      <div class="container-own">
        <h3>Выполненные работы</h3><?php
         $lastBlog = new WP_Query($part);
         if( $lastBlog->have_posts() ):
           while($lastBlog->have_posts() ): $lastBlog->the_post();
        ?>
            <?php $header = types_render_field( "name_readyobject", array('raw' => true) ); ?>
            <?php $date = types_render_field( "year_readyobject", array('raw' => true) ); ?>
            <?php $list_services = explode ('_', types_render_field( 'def_readyobject', array('raw' => true) ) ); ?>
            <?php $list_slider = explode (' ', types_render_field( 'photo_readyobject', array('raw' => true) ) ); ?>
            <?php $video_3d = types_render_field( '3d_readyobject', array('raw' => true) ); ?>
        <div class="elem_project"><a name="<?php echo $header; ?>"></a>
          <h4><?php the_title(); ?></h4>
          <h5><?php echo $header; ?></h5>
          <div class="date"><?php echo $date; ?></div>
          <div class="info">
            <div class="slider">
              <div class="slider_thumbnail">
                <?php if ($video_3d): ?>
                <?php $poster_3d = types_render_field( 'poster_readyobject', array('raw' => true) );?>
                <div class="elem_lent video_elem"><a href="<?php echo $video_3d;?>" class="fancybox fancybox.iframe"><img src="<?php echo $poster_3d;?>" class="poster"><img src="<?php echo get_template_directory_uri();?>/images/play.png" class="play_button"></a></div><?php endif;?>
                <?php foreach( $list_slider as $elem_sl): ?>
                <div class="elem_lent"><a href="<?php echo $elem_sl;?>" class="fancybox"><img src="<?php echo $elem_sl;?>"></a></div><?php endforeach;?>
              </div>
              <div class="slider_elements">
                <div class="slider_lent">
                  <?php if ($video_3d): ?>
                  <?php $poster_3d = types_render_field( 'poster_readyobject', array('raw' => true) );?>
                  <div class="elem_lent"><img src="<?php echo $poster_3d;?>"></div><?php endif;?>
                  <?php foreach( $list_slider as $elem_sl): ?>
                  <div class="elem_lent"><img src="<?php echo $elem_sl;?>"></div><?php endforeach;?>
                </div>
                <div class="slider_buttons"><img src="<?php echo get_template_directory_uri();?>/images/left_arrow.jpg" class="previous"><img src="<?php echo get_template_directory_uri();?>/images/right_arrow.jpg" class="next"></div>
              </div>
            </div>
            <ul class="text"><?php foreach( $list_services as $elem): ?>
              <li><?php echo($elem);?></li><?php endforeach;?>
            </ul>
          </div>
        </div><?php
           endwhile;
         endif;
        ?>
      </div>
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
    </section><a href="#topSite" id="toTop" class="anchor topper_button"><img src="<?php echo get_template_directory_uri();?>/images/toTop.png"></a>
    <script>window.projectPage = true</script>
    <script src="<?php echo get_template_directory_uri();?>/libs/jquery/dist/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/bundle.js"></script>
  </body>
</html>
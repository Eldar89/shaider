<!DOCTYPE html>
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
          <nav><a href="/shaider/" class="anchor">Главная</a><a href="/shaider/services/">Услуги</a><a href="/shaider/projects/">Выполненные работы</a><a href="/shaider/#contact" class="anchor">Контакты</a></nav>
          <div class="sal">
            <div class="social"><a href="https://www.instagram.com/geomarksheyderr/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/inst.png"></a><a href="https://www.facebook.com/profile.php?id=100014247016132" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a><a href="https://vk.com/aerofotosemkag" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/vk.png"></a></div>
            <div class="lang"><span class="selected">RU</span><span><a href="#">KZ</a></span><span><a href="#">ENG</a></span></div>
          </div>
        </div>
      </footer>
    </section>
    <section id="main"><a name="main"></a>
      <video autoplay loop src="<?php echo get_template_directory_uri();?>/bg.mp4"></video>
      <div class="shadow"></div>
      <div class="container-own">
        <div class="wrap">
          <div class="info"><img src="<?php echo get_template_directory_uri();?>/images/main_text.png">
            <div class="form"><img src="<?php echo get_template_directory_uri();?>/images/consult.png">
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
                <footer>
                  <p>Наш специалист свяжется с Вами и ответит на все вопросы.</p>
                  <input type="submit" id="submit_form" value="Отправить">
                </footer>
              </form>
            </div>
          </div>
          <div class="about"><img src="<?php echo get_template_directory_uri();?>/images/about.png"></div>
          <div class="scroll"><img src="<?php echo get_template_directory_uri();?>/images/scroll.png"></div>
        </div>
      </div>
    </section>
    <section id="services"><a name="solutions"></a>
      <header>Отраслевые решения</header>
      <div class="container-own">
        <div class="flex-wrap"><a href="shaider/nedrouser/" style="background: url('<?php echo get_template_directory_uri();?>/images/1_services.jpg') no-repeat center center; background-size: cover;" class="serv_elem">
            <h3>Недропользователи</h3></a><a href="shaider/gos_sector/" style="background: url('<?php echo get_template_directory_uri();?>/images/2_services.jpg') no-repeat center center; background-size: cover;" class="serv_elem">
            <h3>Государственный сектор</h3></a><a href="shaider/building/" style="background: url('<?php echo get_template_directory_uri();?>/images/3_services.jpg') no-repeat center center; background-size: cover;" class="serv_elem">
            <h3>Промышленное и гражданское строительство</h3></a><a href="shaider/agro/" style="background: url('<?php echo get_template_directory_uri();?>/images/4_services.jpg') no-repeat center center; background-size: cover;" class="serv_elem">
            <h3>Агрокомплекс и охрана природы</h3></a></div>
      </div>
      <footer>
        <div class="form">
          <h3>Получить специальное предложение для вашей отрасли</h3>
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
      </footer>
    </section>
    <section id="pref">
      <div class="container-own">
        <header><img src="<?php echo get_template_directory_uri();?>/images/title_pref.png"></header>
        <footer>
          <ul>
            <li><img src="<?php echo get_template_directory_uri();?>/images/1_pref.png" class="icon">
              <div class="info">
                <h3>Комплексность</h3>
                <p>Мы предоставялем для Вас решения по всем направлениям инженерной геодезии и геологии.</p>
              </div>
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/2_pref.png" class="icon">
              <div class="info">
                <h3>Надежность</h3>
                <p>Уже сейчас нас выбирают крупнейшие компании Казахстана.</p>
              </div>
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/3_pref.png" class="icon">
              <div class="info">
                <h3>Инновации, которые работают на Вас</h3>
                <p>Мы следим за инновациями и успешно внедряем их в свою работу.</p>
              </div>
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/4_pref.png" class="icon">
              <div class="info">
                <h3>Экономия</h3>
                <p>Новейшее оборудование позволяет нашим клиентам сокращать сроки реализации проектов до 10 раз, без потери качества!</p>
              </div>
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/5_pref.png" class="icon">
              <div class="info">
                <h3>Опыт</h3>
                <p>Выполняя работы, мы опираемся не только на собственный опыт, но и на опыт партнеров других стран.</p>
              </div>
            </li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/6_pref.png" class="icon">
              <div class="info">
                <h3>Гарантии качества</h3>
                <p>Мы сопровождаем своих клиентов на протяжении 12 месяцев после выполнения работ.</p>
              </div>
            </li>
          </ul>
        </footer>
      </div>
    </section>
    <section id="news">
      <header>Новости</header>
      <div class="container-own"><a herf="#" class="insta_page"><img src="<?php echo get_template_directory_uri();?>/images/insta_color.png"><span>#insta page</span></a>
        <div id="instafeed"></div>
      </div>
    </section>
    <?php 
     $part = array(
       'post_type' => 'clients', //Тип поста
       'posts_per_page' => -1,//Постов на одной странице
       'category_name' => 'partner' //Категория постов
     );
    ?>
    <?php 
     $client = array(
       'post_type' => 'clients', //Тип поста
       'posts_per_page' => -1,//Постов на одной странице
       'category_name' => 'client' //Категория постов
     );
    ?>
    <section id="clients">
      <div class="container-own">
        <header>
          <div class="line"></div>
          <h3>Партнеры</h3>
          <div class="line"></div>
        </header>
        <div class="clients_block">
          <?php
           $lastBlog = new WP_Query($part);
           if( $lastBlog->have_posts() ):
             while($lastBlog->have_posts() ): $lastBlog->the_post();
          ?>
              <?php $partner = types_render_field( "logo_clients", array('raw' => true) ); ?><img src="<?php echo $partner; ?>" class="clients_elem"><?php
             endwhile;
           endif;
          ?>
        </div>
        <header>
          <div class="line"></div>
          <h3>Клиенты</h3>
          <div class="line"></div>
        </header>
        <div class="clients_block">
          <?php
           $lastBlog = new WP_Query($client);
           if( $lastBlog->have_posts() ):
             while($lastBlog->have_posts() ): $lastBlog->the_post();
          ?>
              <?php $client = types_render_field( "logo_clients", array('raw' => true) ); ?><img src="<?php echo $client; ?>" class="clients_elem"><?php
             endwhile;
           endif;
          ?>
        </div>
      </div>
    </section>
    <section id="projects">
      <div id="map"></div>
      <header>
        <h3>География</h3>
        <h4>выполненных работ</h4>
      </header>
    </section>
    <section id="feedback">
      <div class="form">
        <h3>Рассчитать стоимость работ</h3>
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
     $args = array(
       'post_type' => 'sert', //Тип поста
       'posts_per_page' => -1,//Постов на одной странице
       'category_name' => 'sert' //Категория постов
     );
    ?>
    <section id="serts">
      <header>Сертификаты и лицензии</header>
      <div class="container-own">
        <div class="arrows">
          <div class="line"></div>
          <div class="arrows_block">
            <div class="arrow_left"></div>
            <div class="arrow_right"></div>
          </div>
          <div class="line"></div>
        </div>
        <div class="slider_serts">
          <?php
           $lastBlog = new WP_Query($args);
           if( $lastBlog->have_posts() ):
             while($lastBlog->have_posts() ): $lastBlog->the_post();
          ?>
              <?php $sert = types_render_field( "sert_images", array('raw' => true) ); ?><a href="<?php echo $sert; ?>" rel="gallary_sert" class="fancybox_sert slider_elem"><img src="<?php echo $sert; ?>" class="letter"><img src="<?php echo get_template_directory_uri();?>/images/border_sert.png" class="border"></a><?php
             endwhile;
           endif;
          ?>
        </div>
      </div>
    </section>
    <?php 
     $args = array(
       'post_type' => 'teambuild', //Тип поста
       'posts_per_page' => -1,//Постов на одной странице
       'category_name' => 'team' //Категория постов
     );
    ?>
    <section id="team">
      <header>Команда</header>
      <div class="container-own">
        <div class="arrows">
          <div class="line"></div>
          <div class="arrows_block">
            <div class="arrow_left"></div>
            <div class="arrow_right"></div>
          </div>
          <div class="line"></div>
        </div>
        <div class="slider_team">
          <?php
           $lastBlog = new WP_Query($args);
           if( $lastBlog->have_posts() ):
             while($lastBlog->have_posts() ): $lastBlog->the_post();
          ?>
              <?php $avatar = types_render_field( "team_avatar", array('raw' => true) ); ?>
              <?php $name = types_render_field( "team_name", array('raw' => true) ); ?>
              <?php $def_status = types_render_field( "team_status", array('raw' => true) ); ?>
              <?php $team_func = types_render_field( "team_func", array('raw' => true) ); ?>
              <?php $team_num = types_render_field( "team_num", array('raw' => true) ); ?>
          <div class="slider_elem"><img src="<?php echo $avatar; ?>" class="avatar">
            <div class="name"><?php echo $name; ?></div>
            <div class="status">Должность:</div>
            <div class="status_info"><?php echo $def_status; ?></div>
            <div class="func">Основные функции</div>
            <div class="func_info"><?php echo $team_func; ?></div>
            <div class="contact">Контакты</div>
            <div class="contact_info"><?php echo $team_num; ?></div>
          </div><?php
             endwhile;
           endif;
          ?>
        </div>
      </div>
    </section>
    <div id="map_contact"><a name="contact"></a>
      <div id="map_contact_map"></div>
      <header>
        <div class="container-own">
          <div class="wrap">
            <div class="contant_wrap"><img src="<?php echo get_template_directory_uri();?>/images/geo_contact.png">
              <div class="info">
                <h3>Адрес:</h3>
                <p>г. Караганда ул. Кривогуза 39.</p>
              </div>
            </div>
            <div class="contant_wrap"><img src="<?php echo get_template_directory_uri();?>/images/phone_contact.png">
              <div class="info">
                <h3>Телефоны:</h3>
                <div class="num">+7 (700) 600 10 10</div>
                <div class="num">+7 (700) 779 29 49</div>
                <div class="num">+7 (7212) 79 29 49</div>
              </div>
            </div>
            <div class="contant_wrap"><img src="<?php echo get_template_directory_uri();?>/images/phone_contact.png">
              <div class="info">
                <h3>E-mail:</h3><a href="mailto:info@gmshader@mail.ru">792949@mail.ru</a>
                <p class="text">Хотите работать в нашей компании? <br> Отправьте ваше резюме на почту</p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="form_contact">
        <div class="wrap">
          <h3>остались вопросы ?</h3>
          <h4>наш менеджер свяжется с вами</h4>
          <form>
            <label id="name_contact">
              <input type="text" required placeholder="Имя">
            </label>
            <label id="telephone_contact">
              <input type="tel" required placeholder="Телефон">
            </label>
            <textarea id="textarea_contact"></textarea>
            <input type="submit" value="Отправить">
          </form>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container-own">
        <div class="wrap">
          <h3>«Группа компаний комплексного инжиниринга» — 2017</h3>
          <div class="social"><a href="https://www.instagram.com/geomarksheyderr/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/inst_green.png" class="insta icon"></a><a href="https://www.facebook.com/profile.php?id=100014247016132" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook_green.png" class="facebook icon"></a><a href="https://vk.com/aerofotosemkag" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/vk_green.png" class="vk icon"></a></div><a href="http://mindpro-group.com" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/mind_logo.png"></a>
        </div>
      </div>
    </footer>
    <div id="mail" class="not_visible_mail"></div><script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/156564c23da9f60b4aab3e946e3efb4e/connect" id="check-code-pozvonim" charset="UTF-8"></script>
    <sections id="about_modal" style="display: none">
      <div class="container-own"><img src="<?php echo get_template_directory_uri();?>/images/close_modal.png" class="closer">
        <h3>О компании</h3>
        <div data-mcs-theme="dark" class="mCustomScrollbar text"><b>В настоящее время Группа компаний комплексного инжиниринга, </b><span>состоящая из двух организаций: ТОО «Бизнес Инжиниринг» и ИП «Геомаркшейдер», - это динамично развивающаяся на протяжении уже 10 лет компания.</span>
          <p>Группа компаний имеет в своей структуре следующие подразделения:</p>
          <ul>
            <li>отдел инженерной геологии;</li>
            <li>отдел инженерной геодезии;</li>
            <li>отдел маркшейдерии;</li>
            <li>отдел геотехники и геофизики;</li>
            <li>проектный отдел;</li>
            <li>отдел продаж.</li>
          </ul><span>В активах компании имеются:</span>
          <ul>
            <li><b>Геодезическое оборудование</b><span>- высокоточные спутниковые GNNS GPS приемники, Электронные тахеометры, Гироскопический теодолит, Трассопоисковый комплекс, Специальные маркшейдерские инструменты;</span></li>
            <li><b>Аэрофотосъемочные комплексы</b><span>- беспилотные системы с высокоточным оборудованием на борту (фотоаппарат, тепловизор, спектральная камера, видеокамера, магнитометр);</span></li>
            <li><b>Геофизическое оборудование</b><span>- малогабаритная каротажная станция, аэрогеофизические беспилотные системы;</span></li>
            <li><b>Буровое оборудование</b><span>- собственный парк бурового оборудования с разнообразными методами бурения, колонковый, шнековый, ударно-вращательный. В том числе, мобильные малогабаритные буровые установки, с возможностью бурения даже в промышленных помещениях.</span></li>
            <li><span>Для обработки данных используются высокопроизводительные компьютеры - одни из самых мощных в РК и специальное программное обеспечение - лицензионные комплексы AutoCAD CIVIL 3D, GeoStab, ArcGis, Agisoft Photoscan, Surpac;</span></li>
            <li>Автопарк оснащен надежными внедорожниками, пикапами, квадроциклами, снегоходами, прицепами (в том числе жилыми).</li>
          </ul>
          <p>Компания была создана с нуля, в 2006 году в г. Караганда. Первоначально в ее штате было всего 2 человека, а основным видом деятельности являлось маркшейдерское обслуживание горных предприятий, которое было выбрано в связи с широко развитой в Казахстане добывающей промышленностью. Уже в 2007 году компания завезла и внедрила первые в Казахстане малогабаритные буровые установки, которые в последующем стали активно использовать и конкуренты. Наиболее важным этапом в становлении и развитии компании можно считать 2013 год. В этом году было подписано партнерское соглашение с компанией «GEOSCAN» (г. Санкт-Петербург), что позволило ТОО «Бизнес Инжиниринг» стать первым официальным дилером на территории Казахстана. В том же году компанией был приобретен первый беспилотный летательный комплекс. И произведены пробные запуски и его адаптация на рынке Республики. Использование беспилотного летательного аппарата позволило существенно обойти конкурентов в своем регионе за короткий период, сократив сроки выполнения работ до 7-10 раз. В 2014 году было начато строительство собственного трехэтажного офиса с лабораторией и гаражным комплексом. А в 2015 году компания начала планировать запуск отдела продаж. В 2016 году он был успешно запущен и на данный момент идет активная интеграция его деятельности в существующие бизнес-процессы компании. На данном этапе Группа компаний комплексного инжиниринга выполняет полный комплекс работ в области инженерной геологии и геодезии, занимается проектированием разработки добычи полезных ископаемых, выполняет широкий спектр подземных геодезических и геофизических работ, производит маркшейдерские работы любой сложности и по любым направлениям. Основными сегментами деятельности являются: недропользователи, проектные организации, строительные организации, агропромышленный и природоохранный сектор, а также государственный сектор. Имеются стабильные партнерские отношения с: &quot;GEOSCAN&quot; (г.Санкт-Петербург), &quot;КурылысЭкспертПроект&quot; (г.Караганда), &quot;Центргеоланалит&quot; (г.Караганда). Основными клиентами являются: АО «Лонас Технология» (г. Санкт-Петербург), «Корпорация Казахмыс», АО «Arcelor Mittal», ТОО «Bectas Group», ТОО «Kazzinc», АО «ТНК«Казхром», ЗАО «Евразийская Энергетическая Компания», АО «Жайремский ГОК» и другие. Мы работаем по всему Казахстану.</p>
          <h4>Наша компания будет оптимальным дополнением для <br> стабильности и повышения Вашей производительности!</h4>
        </div>
      </div>
    </sections>
    <section id="menu" class="fix_menu">
      <footer>
        <div class="wrap container-own">
          <nav><a href="/shaider/" class="anchor">Главная</a><a href="/shaider/services/">Услуги</a><a href="/shaider/projects/">Выполненные работы</a><a href="/shaider/#contact" class="anchor">Контакты</a></nav>
          <div class="sal">
            <div class="social"><a href="https://www.instagram.com/geomarksheyderr/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/inst.png"></a><a href="https://www.facebook.com/profile.php?id=100014247016132" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png"></a><a href="https://vk.com/aerofotosemkag" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/vk.png"></a></div>
            <div class="lang"><span class="selected">RU</span><span><a href="#">KZ</a></span><span><a href="#">ENG</a></span></div>
          </div>
        </div>
      </footer>
    </section><a href="#topSite" id="toTop" class="anchor"><img src="<?php echo get_template_directory_uri();?>/images/toTop.png"></a>
    <!--
    div.main
      h3="Внимание"
      p="Оставьте ваши контактные данные и наш консультант<br/>свяжется с вами в течении 30 секунд"
      form#application(action="mail.php" method="POST" name="application")
        input#applicationName(name="name" maxlength="20" placeholder="Введите ваше имя" required)
        input#applicationEmail(name="email" type="email" maxlength="20" placeholder="Ваш E-mail" required)
        input#applicationTelephone(name="telephone" type="Tel" maxlength="20" placeholder="Ваш телефон")
        input(type="submit")
        div#app="Отправить"
    -->
    <script>window.mainPage = true</script>
    <script src="<?php echo get_template_directory_uri();?>/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.0.3/leaflet.markercluster.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/bundle.js"></script>
  </body>
</html>
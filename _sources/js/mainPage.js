import SendFunc from './scripts/sendForm'
import FloatMenu from './scripts/floatMenu'
import SliderSert from './scripts/slider_serts'
import SliderTeam from './scripts/slider_team'
import ProjectsMap from './scripts/projects'
import ContactMap from './scripts/map_contact'

export default function () {
  //scroll
  $(".mCustomScrollbar").mCustomScrollbar({
    mouseWheel: {
      scrollAmount: 45
    }
  });

  // click on nav
  $('.anchor').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top - 80
    }, 1000 );
  });

  // Открытие модального окна о компании
  document.querySelector('#main .container-own .about img')
    .addEventListener('click', e => {
      document.querySelector('#about_modal').style.display = 'block';
    });

  document.querySelector('#about_modal .closer')
  .addEventListener('click', e => {
    document.querySelector('#about_modal').style.display = 'none';
  });

  // Instafeed
  const feed = new Instafeed({
        get: 'user',
        userId: '1993739670',
        accessToken: '1993739670.1677ed0.030de024e5704348847dd76406839151',
        clientId: '5064625503384aaeac5a9a67b116eccc',
        template: '<a href="{{link}}" class="instafeed_elem" target="_blank"><img src="{{image}}" /></a>',
        limit: 4,
        resolution: 'standard_resolution'
    });

  feed.run();


  // serts slider
  SliderSert();
  SliderTeam();

  // fancybox sertificates
  $(".fancybox_sert").fancybox({
    maxWidth: '80%',
    maxHeight: '90%',
    fitToView: false,
    width: document.documentElement.clientWidth > 700 ? '80%' : '90%',
    height: document.documentElement.clientWidth > 700 ? '40%' : '50%',
    autoSize: false,
    closeClick: false,
    openEffect: 'fade',
    closeEffect: 'fade',
  });

  // Projects map
  ProjectsMap();
  ContactMap();
}

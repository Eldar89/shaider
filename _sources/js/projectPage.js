export default function () {
  // click on nav
  $('.anchor').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top - 80
    }, 1000 );
  });

  // Перебор всех слайдеров и инициализация каждого отдельно
  [...document.querySelectorAll('#projects_block .elem_project .info .slider')]
      .forEach( (el, num) => {
        let _class = `slider_thumbnail_${num}`,
          _class_lent = `slider_lent_${num}`;

        el.children[0].classList.add(_class);
        el.children[1].children[0].classList.add(_class_lent);

        $(`.${_class}`).slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           arrows: false,
           fade: true,
           asNavFor: `.${_class_lent}`,
           adaptiveHeight: true
        });

        $(`.${_class_lent}`).slick({
          infinite: true,
          slidesToShow: 5,
          slidesToScroll: 5,
          asNavFor: `.${_class}`,
          arrows: false,
          focusOnSelect: true
        });

        document.querySelector(`.${_class_lent}`)
          .nextElementSibling.firstElementChild
          .addEventListener('click', e => {
            $(`.${_class_lent}`).slick('slickPrev');
            console.log($(`.${_class_lent}`))
          });

        document.querySelector(`.${_class_lent}`)
          .nextElementSibling.lastElementChild
          .addEventListener('click', e => {
            $(`.${_class_lent}`).slick('slickNext');
            console.log($(`.${_class_lent}`))
          });
      });

    [...document.querySelectorAll('#projects_block .slider_elements .next')]
      .forEach( el => {
        el.addEventListener('click', e => {
            $('.slider_lent').slick('slickNext');
        });
      });

  // fancybox
  $(".fancybox").click(function() {
    $(".fancybox").fancybox({
      openEffect: 'fade',
      closeEffect: 'fade'
    });
  });
}

export default function () {
  $('.slider_services').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    adaptiveHeight: true
  });

  // Переключение по слайдам не из слайдера
  [...document.querySelectorAll('.slider_elem')]
    .forEach( (el, num) => {
      el.addEventListener('click', e => {
        $('.slider_services').slick('slickGoTo', num);

        document.querySelector('.slider_elem.active').classList.remove('active');
        el.classList.add('active');
      });
    });
}

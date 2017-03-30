export default function () {
  $('.slider_serts').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    variableWidth: true,
    arrows: false
  });

  document.querySelector('#serts .arrows .arrow_left')
    .addEventListener('click', e => {
      $('.slider_serts').slick('slickPrev');
    });

    document.querySelector('#serts .arrows .arrow_right')
      .addEventListener('click', e => {
        $('.slider_serts').slick('slickNext');
      });
}

export default function () {
  $('.slider_team').slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    variableWidth: true,
    arrows: false
  });

  // document.querySelector('#team .arrows .arrow_left')
  //   .addEventListener('click', e => {
  //     $('.slider_team').slick('slickPrev');
  //   });
  //
  //   document.querySelector('#team .arrows .arrow_right')
  //     .addEventListener('click', e => {
  //       $('.slider_team').slick('slickNext');
  //     });
}

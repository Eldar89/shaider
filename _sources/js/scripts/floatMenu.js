// Принимает объект с настройками для меню
export default function () {
  let _menu = document.querySelector('.fix_menu');
  if (window.pageYOffset > 110) {
    _menu.style.top = "0";
  } else {
    _menu.style.top = "-100%";
  }

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 110) {
      _menu.style.top = "0";
    } else {
      _menu.style.top = "-100%";
    }
  });
}

import mainPage from './mainPage'
import projectPage from './projectPage'
import servicesPage from './servicesPage'
import floatMenu from './scripts/floatMenu'

if (window.mainPage === true) {
  mainPage();
} else if (window.projectPage === true) {
  projectPage();
} else if (window.servicesPage === true) {
  servicesPage();
}
//Плавающее меню
floatMenu();
// new FloatMenu({
//     elem : document.getElementById('navigation'),
//     height : 200,
//     first_class : 'menu_fixed_on_top',
//     second_class : 'float_menu'
//   }).init();

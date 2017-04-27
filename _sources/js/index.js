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

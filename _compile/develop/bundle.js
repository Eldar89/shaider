/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';

	var _mainPage = __webpack_require__(1);

	var _mainPage2 = _interopRequireDefault(_mainPage);

	var _projectPage = __webpack_require__(8);

	var _projectPage2 = _interopRequireDefault(_projectPage);

	var _servicesPage = __webpack_require__(9);

	var _servicesPage2 = _interopRequireDefault(_servicesPage);

	var _floatMenu = __webpack_require__(3);

	var _floatMenu2 = _interopRequireDefault(_floatMenu);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	if (window.mainPage === true) {
	  (0, _mainPage2.default)();
	} else if (window.projectPage === true) {
	  (0, _projectPage2.default)();
	} else if (window.servicesPage === true) {
	  (0, _servicesPage2.default)();
	}
	//Плавающее меню
	(0, _floatMenu2.default)();
	// new FloatMenu({
	//     elem : document.getElementById('navigation'),
	//     height : 200,
	//     first_class : 'menu_fixed_on_top',
	//     second_class : 'float_menu'
	//   }).init();

/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  // click on nav
	  $('.anchor').on('click', function (e) {
	    e.preventDefault();
	    $('html, body').animate({
	      scrollTop: $('a[name="' + this.hash.slice(1) + '"]').offset().top - 80
	    }, 1000);
	  });

	  // Открытие модального окна о компании
	  document.querySelector('#main .container-own .about img').addEventListener('click', function (e) {
	    document.querySelector('#about_modal').style.display = 'block';
	  });

	  document.querySelector('#about_modal .closer').addEventListener('click', function (e) {
	    document.querySelector('#about_modal').style.display = 'none';
	  });

	  // Instafeed
	  var feed = new Instafeed({
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
	  (0, _slider_serts2.default)();
	  (0, _slider_team2.default)();

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
	    closeEffect: 'fade'
	  });

	  // Projects map
	  (0, _projects2.default)();
	  (0, _map_contact2.default)();
	};

	var _sendForm = __webpack_require__(2);

	var _sendForm2 = _interopRequireDefault(_sendForm);

	var _floatMenu = __webpack_require__(3);

	var _floatMenu2 = _interopRequireDefault(_floatMenu);

	var _slider_serts = __webpack_require__(4);

	var _slider_serts2 = _interopRequireDefault(_slider_serts);

	var _slider_team = __webpack_require__(5);

	var _slider_team2 = _interopRequireDefault(_slider_team);

	var _projects = __webpack_require__(6);

	var _projects2 = _interopRequireDefault(_projects);

	var _map_contact = __webpack_require__(7);

	var _map_contact2 = _interopRequireDefault(_map_contact);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ },
/* 2 */
/***/ function(module, exports) {

	"use strict";

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var sendForm = function sendForm(id, dates, idMail) {
	  _classCallCheck(this, sendForm);

	  document.getElementById(id).addEventListener('submit', function () {

	    var data = {
	      name: document.querySelector(dates.name.value),
	      email: document.querySelector(dates.email.value),
	      telephone: document.querySelector(dates.telephone.value)
	    };

	    $("#application").submit(function () {
	      $.ajax({
	        type: "POST",
	        url: "mail.php",
	        data: data
	      }).done(function (value) {
	        var mail = document.getElementById(idMail);

	        mail.innerHTML = value;
	        mail.classList.remove('not_visible_mail');

	        setTimeout(function () {
	          $("#" + id).trigger("reset");
	          mail.classList.add('not_visible_mail');
	        }, 1000);
	      });

	      return false;
	    });
	  });
	};

	exports.default = sendForm;

/***/ },
/* 3 */
/***/ function(module, exports) {

	"use strict";

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  var _menu = document.querySelector('.fix_menu');
	  if (window.pageYOffset > 110) {
	    _menu.style.top = "0";
	  } else {
	    _menu.style.top = "-100%";
	  }

	  window.addEventListener('scroll', function () {
	    if (window.pageYOffset > 110) {
	      _menu.style.top = "0";
	    } else {
	      _menu.style.top = "-100%";
	    }
	  });
	};

/***/ },
/* 4 */
/***/ function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  $('.slider_serts').slick({
	    infinite: true,
	    slidesToShow: 4,
	    slidesToScroll: 4,
	    variableWidth: true,
	    arrows: false
	  });

	  document.querySelector('#serts .arrows .arrow_left').addEventListener('click', function (e) {
	    $('.slider_serts').slick('slickPrev');
	  });

	  document.querySelector('#serts .arrows .arrow_right').addEventListener('click', function (e) {
	    $('.slider_serts').slick('slickNext');
	  });
	};

/***/ },
/* 5 */
/***/ function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  $('.slider_team').slick({
	    infinite: true,
	    slidesToShow: 4,
	    slidesToScroll: 4,
	    variableWidth: true,
	    arrows: false
	  });

	  document.querySelector('#team .arrows .arrow_left').addEventListener('click', function (e) {
	    $('.slider_team').slick('slickPrev');
	  });

	  document.querySelector('#team .arrows .arrow_right').addEventListener('click', function (e) {
	    $('.slider_team').slick('slickNext');
	  });
	};

/***/ },
/* 6 */
/***/ function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  var _elem = document.querySelector('#projects #map');
	  var mymap = L.map(_elem, {
	    scrollWheelZoom: false
	  }).setView([49.056080, 66.964328], 5);

	  L.control.zoom({
	    position: 'bottomleft'
	  });

	  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	    maxZoom: 18,
	    attribution: ' ',
	    id: 'mapbox.streets'
	  }).addTo(mymap);

	  var markers = L.markerClusterGroup({
	    iconCreateFunction: function iconCreateFunction(cluster) {
	      return L.divIcon({ html: '<b class="map_icon"> </b>' });
	    }
	  });

	  getPosts(markers);

	  mymap.addLayer(markers);
	};

	function getPosts(markers) {
	  $.get('http://xn--e1aybc.kz/shaider/?json=get_posts&post_type=ready_object', function (value) {
	    value.posts.forEach(function (el) {
	      var _coords = el.custom_fields['wpcf-map_readyobject'][0].split(',');
	      addMarker([+_coords[0], +_coords[1]], el.title, el.custom_fields['wpcf-year_readyobject'][0], 'http://\u0442\u0435\u0441\u0442.kz/shaider/projects/#' + el.custom_fields['wpcf-name_readyobject'], markers);
	    });
	  });
	}

	function modalPopup(name, year, link) {
	  return '\n    <h3>' + name + '</h3>\n    <div class="year"><b>\u0413\u043E\u0434:</b>' + year + '</div>\n    <a href="' + link + '">\u041F\u0435\u0440\u0435\u0439\u0442\u0438 \u043D\u0430 \u043E\u0431\u044A\u0435\u043A\u0442</a>\n  ';
	}

	function addMarker(geo, name, year, link, markers) {
	  markers.addLayer(L.marker(geo, {
	    icon: L.icon({
	      iconUrl: 'http://тест.kz/shaider/wp-content/themes/shaider/images/mark_geo_contact.png'
	    })
	  }).bindPopup(modalPopup(name, year, link)).openPopup());
	}

/***/ },
/* 7 */
/***/ function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  var _elem = document.querySelector('#map_contact_map');
	  var mymap = L.map(_elem, {
	    scrollWheelZoom: false
	  }).setView([49.803596, 73.061733], 16);

	  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	    attribution: ' ',
	    id: 'mapbox.streets'
	  }).addTo(mymap);

	  mymap.addLayer(L.marker([49.803554, 73.066089], {
	    icon: L.icon({
	      iconUrl: 'http://тест.kz/shaider/wp-content/themes/shaider/images/mark_geo_contact.png'
	    })
	  }));
	};

/***/ },
/* 8 */
/***/ function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  // click on nav
	  $('.anchor').on('click', function (e) {
	    e.preventDefault();
	    $('html, body').animate({
	      scrollTop: $('a[name="' + this.hash.slice(1) + '"]').offset().top - 80
	    }, 1000);
	  });

	  // Перебор всех слайдеров и инициализация каждого отдельно
	  [].concat(_toConsumableArray(document.querySelectorAll('#projects_block .elem_project .info .slider'))).forEach(function (el, num) {
	    var _class = 'slider_thumbnail_' + num,
	        _class_lent = 'slider_lent_' + num;

	    el.children[0].classList.add(_class);
	    el.children[1].children[0].classList.add(_class_lent);

	    $('.' + _class).slick({
	      slidesToShow: 1,
	      slidesToScroll: 1,
	      arrows: false,
	      fade: true,
	      asNavFor: '.' + _class_lent,
	      adaptiveHeight: true
	    });

	    $('.' + _class_lent).slick({
	      infinite: true,
	      slidesToShow: 5,
	      slidesToScroll: 5,
	      asNavFor: '.' + _class,
	      arrows: false,
	      focusOnSelect: true
	    });

	    document.querySelector('.' + _class_lent).nextElementSibling.firstElementChild.addEventListener('click', function (e) {
	      $('.' + _class_lent).slick('slickPrev');
	      console.log($('.' + _class_lent));
	    });

	    document.querySelector('.' + _class_lent).nextElementSibling.lastElementChild.addEventListener('click', function (e) {
	      $('.' + _class_lent).slick('slickNext');
	      console.log($('.' + _class_lent));
	    });
	  });

	  [].concat(_toConsumableArray(document.querySelectorAll('#projects_block .slider_elements .next'))).forEach(function (el) {
	    el.addEventListener('click', function (e) {
	      $('.slider_lent').slick('slickNext');
	    });
	  });

	  // fancybox
	  $(".fancybox").click(function () {
	    $(".fancybox").fancybox({
	      openEffect: 'fade',
	      closeEffect: 'fade'
	    });
	  });
	};

	function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

/***/ },
/* 9 */
/***/ function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});

	exports.default = function () {
	  $('.slider_services').slick({
	    infinite: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    dots: false,
	    adaptiveHeight: true
	  });

	  // Переключение по слайдам не из слайдера
	  [].concat(_toConsumableArray(document.querySelectorAll('.slider_elem'))).forEach(function (el, num) {
	    el.addEventListener('click', function (e) {
	      $('.slider_services').slick('slickGoTo', num);

	      document.querySelector('.slider_elem.active').classList.remove('active');
	      el.classList.add('active');
	    });
	  });
	};

	function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

/***/ }
/******/ ]);
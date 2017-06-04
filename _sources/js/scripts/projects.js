export default function () {
  let _elem = document.querySelector('#projects #map');
  var mymap = L.map(_elem, {
    scrollWheelZoom: false,
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
    iconCreateFunction: function(cluster) {
      return L.divIcon({ html: '<b class="map_icon"> </b>' });
    }
  });

  getPosts(markers);

  mymap.addLayer(markers);
}

function getPosts(markers) {
  $.get('http://792949.kz/?json=get_posts&post_type=ready_object&count=-1', value => {
    value.posts.forEach(el => {
      let _coords = el.custom_fields['wpcf-map_readyobject'][0].split(',');
      addMarker(
        [+_coords[0], +_coords[1]],
        el.title,
        el.custom_fields['wpcf-year_readyobject'][0],
        `http://792949.kz/projects/#${el.custom_fields['wpcf-name_readyobject']}`,
        markers
      );
    });
  });
}

function modalPopup(name, year, link) {
  return `
    <h3>${name}</h3>
    <div class="year"><b>Год:</b>${year}</div>
    <a href="${link}">Перейти на объект</a>
  `
}

function addMarker(geo, name, year, link, markers) {
  markers.addLayer(
    L.marker(geo, {
      icon: L.icon({
        iconUrl: 'http://792949.kz/wp-content/themes/shaider/images/mark_geo_contact.png'
      })
    })
    .bindPopup(modalPopup(name, year, link))
    .openPopup()
  );
}

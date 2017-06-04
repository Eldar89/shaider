export default function () {
  let _elem = document.querySelector('#map_contact_map');
  var mymap = L.map(_elem, {
    scrollWheelZoom: false,
  }).setView([49.803596, 73.061733], 16);

  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: ' ',
    id: 'mapbox.streets'
  }).addTo(mymap);

  mymap.addLayer(
    L.marker([49.803554, 73.066089], {
      icon: L.icon({
        iconUrl: 'http://792949.kz/wp-content/themes/shaider/images/mark_geo_contact.png'
      })
    }));
}


function initMap() {
        var coordi = {lat: 54.952318, lng: 23.867845};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: coordi
        });
        var marker = new google.maps.Marker({
          position: coordi,
          map: map
        });
      }
initMap();

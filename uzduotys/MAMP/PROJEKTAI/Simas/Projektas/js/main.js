function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 54.7047634, lng: 25.2746188},
      zoom: 16,
      styles: [
  {
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#f5f5f5"
        }
        ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#616161"
            }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
            {
                "color": "#f5f5f5"
            }
            ]
        },
        {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#bdbdbd"
            }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#eeeeee"
            }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#757575"
            }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#e5e5e5"
            }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#9e9e9e"
            }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#ffffff"
            }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#757575"
            }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#dadada"
            }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#616161"
            }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#9e9e9e"
            }
            ]
        },
        {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#e5e5e5"
            }
            ]
        },
        {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#eeeeee"
            }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#c9c9c9"
            }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "color": "#9e9e9e"
            }
            ]
        }
        ]
    });
    var image = "../img/maps_icon.png";
    var marker = new google.maps.Marker({
        position: {lat: 54.7047634, lng: 25.2746188},
        map: map,
        title: 'Hello World!',
        icon: image
    });
  }

//   //to db using ajax and php
//   function duomenuIvedimas() {
//     var pirmasvardas=$("#pirmasvardas").val();
//     var pastukas=$("#pastukas").val();
//     $.ajax({
//         type: "POST",
//         url: "./templates/php_db.php",
//         data: {pirmasvardas:pirmasvardas,pastukas:pastukas},
//         dataType: "JSON"
//     });
//     setTimeout(function () {
//         alert("Uzsiregistruoti pavyko");
//     }, 1000);
// }


//nenukelio i puslapio virsu, bet neistrina
$('#newsletter').on('click', function(e){
    e.preventDefault();
    var pirmasvardas=$("#pirmasvardas").val();
    var pastukas=$("#pastukas").val();
    $.ajax({
        type: "POST",
        url: "./templates/php_db.php",
        data: {pirmasvardas:pirmasvardas,pastukas:pastukas},
        dataType: "JSON"
    });
    setTimeout(function () {
        alert("Uzsiregistruoti pavyko");
    }, 1000);
 });

  //to db using ajax and php
  function signUp() {
    var vardas=$("#vardas").val();
    var pavarde=$("#pavarde").val();
    var user=$("#user").val();
    var password=$("#password").val();
    var telefonas=$("#telefonas").val();
    var email=$("#email").val();
    $.ajax({
        type: "POST",
        url: "./templates/sign_up_in_db.php",
        data: {vardas:vardas,pavarde:pavarde,user:user,password:password,telefonas:telefonas,email:email, },
        dataType: "JSON"
    });
    setTimeout(function () {
        alert("Uzsiregistruoti pavyko");
    }, 1000);
}

//   function getData() {
//     $.ajax({
//         url: '../templates/ajax_retrieve.db.php',
//         data: "",
//         dataType: 'json',
//         success: function(data)
//         {
//           var id = data[0];
//           var name = data[1];
//           var email = data[2];
//           $('#id1').text(id);
//           $('#name1').text(name);
//           $('#email1').text(email);
//         } 
//       });

// }

$('#form-button-submit').on('click', function(e){
    e.preventDefault();
    $.ajax({
        url: '../templates/ajax_retrieve.db.php',
        data: "",
        dataType: 'json',
        success: function(data)
        {
          var id = data[0];
          var name = data[1];
          var email = data[2];
          $('#id1').text(id);
          $('#name1').text(name);
          $('#email1').text(email);
        } 
      });
 });






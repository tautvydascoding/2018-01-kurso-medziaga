$(function() {
    $('#slides').slidesjs({
      // width: 940,
      // height: 528,
      navigation: false
    });
  }
);

function initMap() {
    var uluru = {lat: 54.936345, lng: 23.890658};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        mapTypeId: 'satellite',
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}

function validation() {
    var vardas = document.getElementById('name').value;
    var pavarde = document.getElementById('lname').value;
    var username = document.getElementById('usernm').value;
    var pwd = document.getElementById('psw').value;
    var mail = document.getElementById('mail').value;

    if (vardas=="" || pavarde=="" || username=="" || pwd=="" || mail =="") {
        alert("Uzpildyk visus langelius");
        return false;
    } else {
        return true;
    }

}

    var masyvas = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
setInterval(function () {
    var simbolis = masyvas[Math.round(Math.random() * (masyvas.length - 1))];
    var simbolis1 = masyvas[Math.round(Math.random() * (masyvas.length - 1))];
    var simbolis2 = masyvas[Math.round(Math.random() * (masyvas.length - 1))];
    var simbolis3 = masyvas[Math.round(Math.random() * (masyvas.length - 1))];
    var simbolis4 = masyvas[Math.round(Math.random() * (masyvas.length - 1))];
    var simbolis5 = masyvas[Math.round(Math.random() * (masyvas.length - 1))];
document.getElementById("margumynas").style.background= '#'+simbolis+simbolis2+simbolis3+simbolis1+simbolis5+simbolis4;
}, 2000);

$(function() {
    var p = $(".pulse");
    for(var i=0; i<50; i++) {
        p.animate({opacity: 0.2}, 4000, 'linear')
        .animate({opacity: 1}, 4000, 'linear');
    }
});


$(".kepuraite").animate(
    {
"left" : "1700px",
}, 6500
);


$(document).ready(function(){
        $(".kat").fadeIn(3000);
});



$('#logo').animate({
    "height" : "35vh",
}, 3000);

$('a.liurliur').delay(2700).animate({
    'opacity': '1'
}, 800);
///--------karusele-start
$('.carousel').carousel();

///-------karusele-end------      54.907203  23.983124
///-----googleMaps---start-----
function initMap() {
        var uluru = {lat: 54.907203, lng: 23.983124};
        var ulur = {lat: 54.908786, lng: 23.981417};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: ulur
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }


///-----googleMaps---end------

///-----issokantis pasto siuntimas----start---
$(document).ready(function(){
    $("#pastas").click(function(){
        $("#uzklausos_forma").modal();
    });
});

$(document).ready(function(){

        $("#laiskas_issiustas").modal();

});
///-----issokantis pasto siuntimas end-----

$('.meniu_icon').click(function(event) {
    $('.meniu-isvaziuojantis').css('display', 'flex');
    $('.meniu-isvaziuojantis').animate({
        'right': '0'}, 800);
});

$('.meniu-isvaziuojantis').mouseleave(function(event) {
    $('.meniu-isvaziuojantis').animate({
        'right': '-400px'}, 800);
        $('.meniu-isvaziuojantis').css('display', 'none');
});

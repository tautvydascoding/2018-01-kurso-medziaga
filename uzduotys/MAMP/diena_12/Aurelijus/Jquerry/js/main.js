console.log(" Labas ");
//kurimas
var elementas = $("<p></p>").html;

var elementas2 = $('<h2/>');    //atidaro ir uzdaro elementa, tik jquery

var sekcija = $('<section></section>').html('<h1> Mokomes </h1>');    //reikia prisiskirti kintamajam, tam kad issisaugotu reiksme
console.log("kintamojo isvedimas",sekcija);


sekcija.appendTo("body");   //appendTo atlieka ta pati kaip appendChild javascripte


$('h1').addClass('bg-warning mt-5');


$('a').animate(function() {
$('h2').addClass('bg-info aukstis-100 du');
    /* Act on the event */
});

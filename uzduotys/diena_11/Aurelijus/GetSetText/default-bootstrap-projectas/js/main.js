console.log(" Labas ");

var tekstas = $('h1').text("pakeistas h1 tekstas");     //paeme tik tai teksta // kintamasis tekstas, tam kad duomenys butu issaugoti
                                                        //jeigu kabutes paduodama reiksme, tada pakeiciami esami duomenys

var a = $('h1')[0];     //DOM html elementas
var b = $('h1').eq(0);  //jquery objektas, veiks visos jquery komandos
var c = $('h1');        //
console.log(a,b,c);

b.css("backround-color", "green");

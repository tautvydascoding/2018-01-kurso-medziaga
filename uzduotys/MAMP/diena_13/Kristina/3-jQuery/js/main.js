console.log("Labas");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio

var paveiksliukas = $('<img/>');
paveiksliukas.attr({
	"width" : "200px",
	"height" : "200px",
	"src" : "./1.jpg"
});

var paveiksliukas2 = $('<img/>');
paveiksliukas2.attr({
	"width" : "200px",
	"height" : "200px",
	"src" : "./2.jpg"
});

// arba 
// var paveiksliukas = $('<img src="" width="200px" height="200px">');

console.log(paveiksliukas);

// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

var virsus = $('<header/>').text('meskiukas rudnosiukas');
var apacia = $('<footer/>').html('raudonkepuraite');

//teksto idejimas 
//virsus.html('meskiukas rudnosiukas');

$('body').prepend(virsus);
$('body').append(apacia);

//arba
// $('body').prepend('<header></header>');

// 1.2
// i <header> ir <footer> ideti <img> elementa

$('header').append(paveiksliukas);
$('footer').append(paveiksliukas2);

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

$('header img').toggleClass('logo');

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

$('header').after('<main> mano mainas </main>');

// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

// $('<article/>').append('<h2/>');
// $('<h2/>').text('blablabla');

var straipsnis = $('<article></article>');
var manoH2 = $('<h2></h2>').html('antraste');
var aprasymas = $('<p></p>').html('lorem ipsum');

$('main').append(straipsnis);
straipsnis.append(manoH2);
straipsnis.append(aprasymas);

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGO i kita vieta naudojant js, i footer; i article tarp h2 ir p.

$('.logo').appendTo('footer');

$('.logo').insertAfter('h2');

//
// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//

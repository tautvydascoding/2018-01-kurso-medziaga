// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
var paveiksliukas = $('<img>').attr({
    'height' : '200px',
    'width' : '200px',

    'src' : './1.jpg'
});
var paveiksliukas2 = $('<img>').attr({
    'height' : '200px',
    'width' : '200px',

    'src' : './1.jpg'
});
console.log(paveiksliukas);


// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
var virsus = $('<header/>').html('<h1> virsus</h1>');
var apacia = $('<footer/>').html('<h1> apacia</h1>');

$('body').prepend(virsus);
$('body').append(apacia);

// 1.2
// i <header> ir <footer> ideti <img> elementa
$(virsus).append(paveiksliukas);
$(apacia).append(paveiksliukas2);



// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px
$('header img').toggleClass('logo');

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
$(virsus).after('<main> main dalis </main>');
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
$('<article></article>').appendTo('main');
// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa
$('<h2> h2h2h2h2h2h2 </h2>').appendTo('article');
$('<p> straipsnis</p>').appendTo('article');
// 1.8
// perkelti LOGO i kita vieta naudojant js
$('.logo').insertAfter('h2');
//
// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------
alert("labas");
prompt("labas");

// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//

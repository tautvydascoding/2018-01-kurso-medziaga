console.log(" Labas ");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio



// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
var pav = $('<img>');
pav.attr( { "width" : "200px",
            "height" : "200px",
            "src" : "../1-php/images/1.jpg"
} ) ;
console.log(pav);



var virsus = $('<header>virsus</header>');
var apacia = $('<footer>apacia</footer>').html("apacioje");

virsus.html("Menu");        //iraso teksta

$('body').prepend(virsus);          //ideda i body virsus
$('body').append(apacia);           //ideda i body apacia

//arba
// $('body').append('<header> antraste </header>');


// 1.2
// i <header> ir <footer> ideti <img> elementa
$('header, footer').append(pav);


// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px


// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$('header img').toggleClass('logo');

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
$('header').after('<main> pgrindinis</main>');
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

$('main').append('<article> <h2>Bandom</h2> <p>paragrafas</p> </article>');



// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGO i kita vieta naudojant js
    $('.logo').appendTo('article');
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

console.log(" Labas jquery");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
    var paveiksliukas = $('<img>').attr({"height":"200px"});    //taip galima nurodyti tik viena atributa
    paveiksliukas.attr({
        "width" : "200px",
        "src": "1.jpg"
    });


    console.log(paveiksliukas);
// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

var virsus = $('<header></header>').text("Headerio sukurimas"); //elemento sukurimas, nes <>, jei nebutu - ieskotu
var apacia = $('<footer>Footerio sukurimas</footer>');          //elemento sukurimas, nes <>, jei nebutu - ieskotu

// virsus.html(Menu);

$('body').prepend(virsus);   //ideda kaip vaika i virsu
$('body').append(apacia);    //ideda kaip vaika i apacia

$('body').prepend('<header>Antraste</header>');

// 1.2
// i <header> ir <footer> ideti <img> elementa
$('header,footer').prepend(paveiksliukas);
// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px
$('header img').addClass('logo');
// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
var turinys = $('<main>Turinys</main>');    //sukuriamas elementas
$('header').after('turinys');

// $('<main></main>').text("Turinys");  IDEA
// $('header').after('<main/>').text("Turinys");    //tas pat viena eilute ir nekuriant papildomo kintamojo


// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
var straipsnis = $('<article></article>');
var H2 = $('<h2/>').html('Antraste');
var Aprasymas = $('<p/>').html('hfiuafiaafwafiusffoia');

$('main').append(straipsnis);

straipsnis.append(H2);
straipsnis.append(Aprasymas);




// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGO i kita vieta naudojant js

//
// ---------------------------------
// 1.9 daugiau uzduociu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//

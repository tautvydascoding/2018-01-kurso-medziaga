console.log("Labas");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
var paveiksliukas = $("<img >");
paveiksliukas.attr( {
    "width" : "200px",
    "height" : "200px",
    "src" : "./img/1.jpg"
} );


console.log(paveiksliukas);



// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
var virsus = $("<header></header>");
var apacia = $("<footer></footer>");

//teksto idejimas
virsus.html("Menu")
apacia.html("Puslapio apacia")

$("body").prepend( virsus ); //ideda i virsu kaip vaika
$("body").append( apacia );
//  arba
// $("body").append( "<header> Antraste </header>" );

// 1.2
// i <header> ir <footer> ideti <img> elementa
$("header, footer").append( paveiksliukas );


// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$("header img").toggleClass("logo");
// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
var manoMain = $("<main></main>").html("mano tekstas");
$("header").after( manoMain );
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
var straipsnis = $("<article></article>");
var manoH2 = $("<h2></h2>").html("Antraske");
var aprasymas = $("<p></p>").html("Aprasymas");

$('body').append(straipsnis);

straipsnis.append(manoH2);
straipsnis.append(aprasymas);
//arba
// $('article').append(manoH2);
// $('article').append(aprasymas);

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa
$(manoMain).append(straipsnis);
// 1.8
// perkelti LOGO i kita vieta naudojant js
//a)perkelti i footer
//b) perkelti i article
$(".logo").appendTo("footer");
$(".logo").insertAfter("h2"); //yra ir insertBefore
// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//

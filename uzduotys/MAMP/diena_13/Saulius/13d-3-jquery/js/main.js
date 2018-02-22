console.log(" Labas ");
// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
var foto = $("<img>");
foto.attr({
    "width" : "200px",
    "heigth" : "200px",
    "src" : "./img/1.jpg"
});
var foto2 = $("<img>");
foto2.attr({
    "width" : "200px",
    "heigth" : "200px",
    "src" : "./img/2.jpg"
});
console.log(foto);
// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
var virsus = $("<header/>");
var apacia = $("<footer/>").html("puslapio apacia"); // ideda teksta i html
// teksto idejimas
virsus.html("Menu"); // kitas budas ideti teksta i html
//idejimmas i body
$("body").prepend(virsus); //prepend ides kaip vaika i virsu
$("body").append(apacia); // append ides kaip vaika i apacia
// append prepend before after skirta ideti i html
//arba
// $("body"). prepend('<header>antraste</header>');
// 1.2
// i <header> ir <footer> ideti <img> elementa
$("header, footer").append(foto);
// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$("header img").toggleClass('logo');
// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
var manoMain = $("<main/>").html("mano tekstas");
$("header").after(manoMain);
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
var manoArticle = $("<article/>");
var manoH2 = $("<h2/>").html("antraste");
var ppp = $("<p/>").html("cia daug teksto");
$("main").append(manoArticle);
manoArticle.append(manoH2);
manoArticle.append(ppp);
// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGO i kita vieta naudojant js
$(".logo").insertAfter("h2");
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

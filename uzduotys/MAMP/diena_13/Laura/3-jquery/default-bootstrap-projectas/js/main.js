console.log(" Labas ");



        // visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

        // 1 uzduotis
        // su js sukurti <img elementa 200x200 dydzio
        // ir ideti juos i body

var paveiksliukas = $('<img/>');
paveiksliukas.attr( {"width": "200px", "height": "200px", "src" : "./22.jpg"} );
console.log( paveiksliukas);



        // 1.1
        // su js sukurti <header> ir <footer>

//sukurimas
var virsus = $('<header> LA </header>');
var apacia = $('<footer> apacia </footer>');

//teksto idejimas. arba sitas
// virsus.html("Virsus");
// apacia.html("APACIA");

//idejimas i body
$('body'). prepend( virsus);  //ideda i virsu
$('body'). append (apacia);
///arba
// $('body').prepend( '<header> Antraste </header>');
// $('body').append( '<footer> Pabaiga </footer>');



        // 1.2
        // i <header> ir <footer> ideti <img> elementa
$('header, footer').append( paveiksliukas);



        // 1.3
        // css faile aprasyti .logo klase:
        //      dydis 100x100, seselis i visas puses per 10px


        // 1.4
        // <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$('header img').toggleClass('logo');


        // 1.5
        // sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

var manoMain = $('<main/>'). html("Mano tekstas");
$('header').after( manoMain);   //po Header ideti main



        // 1.6
        // sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)



var straipsnis = $('<article></article>');
var manoH2 = $('<h2></h2>').html('Antraste');
var aprasymas = $('<p></p>').html('Lorem');


$('main').append('straipsnis');    //surandi kur ideti. i pagrindini faila;

// straipsnis.append( manoH2);        //i straipsni KA dedame;
// straipsnis.append( aprasymas);
// arba
$('article').appendTo('article');
$('straipsnis').insertAfter('h2');   //insertBefore//


        // 1.7
        //  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

        // 1.8
        // perkelti LOGO i kita vieta naudojant js
        //A) perkelti i footeri
$('.logo').appendTo('footer');  //suranda logo ir perkelia;

//B) perkelti i article (tarp h2 ir p);
$('.logo').insertAfter('h2');   //insertBefore

        // ---------------------------------
        // 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
        // ---------------------------------


        // =================click=========
        // 1.9.1
        // paspaudus ant logo ji suanimuoti jQuery
        // LOGO keliauja i desine ir virsu ekrano puse
        // tampa permatomas 0.5
        //

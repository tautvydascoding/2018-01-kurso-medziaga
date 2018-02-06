console.log(" Labas ");

// =====================PASIKARTOJIMAS==================
//
//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
function printKaina(x) {
    console.log("Kaina:", x);
// arba dokument.write("Kaina: " + x + "<br>");
}
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);
// ka paduodam skliaustuose, skrenda i x vieta>>

// function printKaina( 999.00) {
//     console.log("Kaina:", x);
// // arba dokument.write("Kaina: " + x + "<br>");
// }
// printKaina(999.00);
// printKaina(13.49);
// printKaina(100.05);

//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
//
// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
//
function pazymiuVidurkis(x) {
    var x = 5;
    var x1 = 10;
    var x2 = 8;
    var x3 = 6;
    var x4 = 8;
    console.log("Vidurkis:", (x + x1 + x2 + x3 + x4)/5 );
}
pazymiuVidurkis();


// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
//
function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5)/ 5;
    console.log( Vidurkis);
}
pazymiuVidurkis(5, 10, 8, 6, 8);


//
// =====================RETURN==================
//
// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    var vardas = "Tomas";
    // var kuria laikinus kintamuosiussss;
    return vardas;
}
var x = getVardas();
console.log("Mano draugas", x);


//
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var pavarde = "Tamauskas";
    var vardas = "Antanas";
    var tekstas = vardas + pavarde;
    console.log("Draugas:");
    return tekstas;  // gali sujungti tekstus +++ i viena
    console.log("testuoju"); //RETURN funkcija nutraukia darba;
}
var y = getVardasPavarde();
console.log(y);   // arba console.log (getVardasPavarde)


//
// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
//
//

function getH1ElementoAukstis() {
    // var h1Elementas = dokument.qeurySelector('h1'); ///ieskome H1
    // console.log( x ); //TESTUOJU ar randame h1
    var aukstis = document.querySelector('h1').offsetHeight;
    return aukstis;
}
var x = getH1ElementoAukstis();
console.log("aukstis", x);

// ((var aukstis = document.querySelector('h1').clientHeight;
// console.log(aukstis); ))


// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//
//
// /return NAUDOTI


// =================FOR intro  ======================


//
// ==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
// ================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

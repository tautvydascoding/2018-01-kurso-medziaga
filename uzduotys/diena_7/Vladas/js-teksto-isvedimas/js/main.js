console.log(" Labas ");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);


// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// console.log(aukstis);
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

//     var kaina1 = 999.00;
//     var kaina2 = 13.49;
//     var kaina3 = 100.05;
//
// function printKaina(x) {
//     console.log("Kaina", kaina1);
//     console.log("Kaina", kaina2);
//     console.log("Kaina", kaina3);
//   ARBA:
//        document.write("Kaina" + x + "<br>");
// }
// printKaina();
// printKaina();

//ARBA
function printKaina(x) {
    console.log("kaina:", x);
}

printKaina(999.00);
printKaina(13.49);
printKaina(100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// function pazymiuVidurkis(x) {
    //var x1 = 5;
    //var x2 = 10;
    //var x3 = 8;
    //var x4 = 6;
    //var x5 = 8;
//     console.log("Vidurkis", (x1 + x2 + x3 + x4 + x5) / 5);
// }
// pazymiuVidurkis();


// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) /5;
    console.log("Vidurkis", vidurkis);
}
pazymiuVidurkis1(5, 10, 8, 6, 8);

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    var vardas = "Tomas";
    return vardas;
}
var x = getVardas();
console.log("Draugo vardas", x);
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var vardas = "Tomas";
    var pavarde = "Tomauskas";
    return vardas + pavarde;
}
var y = getVardasPavarde();
console.log( y);
// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
function getH1ElementoAukstis() {
    // var x = document.querySelector('h1'); //ieskom h1
    // console.log(x); testuojam ar randa h1
    // var aukstis = x.offsetHeight;
    // console.log("h1 aukstis", aukstis);
    var aukstis1 = document.querySelector('h1').offsetHeight;
    return aukstis1;
}
var x = getH1ElementoAukstis();
console.log("aukstis", x);
// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) /5;
    return vidurkis;
}
var x = pazymiuVidurkis1(5, 10, 8, 6, 8);
console.log("vidurkis", x);

// =================FOR intro  ======================

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

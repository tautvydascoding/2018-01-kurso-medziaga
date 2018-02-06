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
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
function printKaina(x) {
    console.log("Kaina:", x);
// arba
document.write("Kaina:" + x + "<br>"); // Kaina 999.00 <br>
}
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);
// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
    var x1 =5;
    var x2 =10;
    var x3 =8;
    var x4 =6;
    var x5 =8;
console.log("Pazymiu vidurkis:", (x1 + x2 + x3 + x4 + x5) /5);
    // console.log((5 + 10 + 8 + 6 + 8) / 5); // mano bandymas
}
pazymiuVidurkis();
// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(x1, x2, x3, x4, x5) { // nauji issigalvoti lokalus laikini kintamieji
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    console.log(vidurkis);
    //arba
    document.write("Vidurkis" + vidurkis + "<br>");
}
pazymiuVidurkis1(5, 4, 8, 6, 8);
//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
function getVardas() {
var vardas = "Tomas"; // local laikinas kintamasis
return vardas;
}
var x = getVardas();
console.log("Mano draugas:", x);
document.write("Mano draugas:" + x + "<br>");
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas ir "vardas" Antanas
// patikrinti ar veikia f-ja
function getVardasPavarde() {
    var vardas = "Antanas";
    var pavarde = "Tomauskas";
    return vardas + pavarde; // "+" gali sujungti tekstus/string i vienas
    console.log(test); // niekada neveiks nes po return funkcija nutraukia darba
}
var y = getVardasPavarde();
console.log("Mano draugas yra:", y);
document.write("Mano draugas yra:" + y + "<br>");

// 4 UZDUOTIS
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// A) sukurti h1 su tekstu viduje (HTML faile)
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
function getH1ElementoAukstis() {
    // var h1elementas = document.querySelector('h1'); // ieskome h1
    // console.log(x); // testuoju ar pasiselectino h1
    // var aukstis = h1elementas.offsetHeight;
    // arba
    var aukstis = document.querySelector('h1').offsetHeight;
    // console.log("h1 aukstis:", aukstis);
    return aukstis;
}
var x = getH1ElementoAukstis();
console.log("aukstis", x);
// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")


// =================FOR intro  ======================

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

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
// paieskos komanda, veikia pagal css taisykles pvz.class, #,
// yra querySelectorAll tada [] nurodyt kelinta
// innerHTML - keicia surasto HTML elemento vidu

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
    console.log("kaina:", x);
    // arba
    document.write("kaina:" + x + "<br>");
}
printKaina(999.0);
printKaina(13.49);
printKaina(100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
    console.log("vidurkis", (5 + 10 + 8 + 6 + 8) / 5);
}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    // console.log( "vidurkis", (x1 + x2 + x3 + x4 + x5) / 5);
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    // document.querySelector("h1").innerHtml = "<b>vidurkis</b>"; // neveikia
    document.write("vidurkis: " + vidurkis + "<br>");
}
pazymiuVidurkis1(2, 5, 7, 9, 5);
//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    var vardas = "tomas";
    return vardas; // po return toliau funkcijoj nebeskaito nieko
}
var x = getVardas();
console.log("mano draugas", x);


// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var vardas = "Tomas";
    var pavarde = "Tomauskas";
    return vardas + pavarde; // + sujungia tekstus
}
var x = getVardasPavarde();
// console.log("mano draugas", x);
console.log("mano draugas", getVardasPavarde());

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis() {
    // var h1 = document.querySelector("h1"); // ieskome h1
    // console.log(x); // testuoju ar radone h1
    // var aukstis = h1.offsetHeight; // h1-x-tas visas elementas h1
    //arba
    var aukstis = document.querySelector("h1").offsetHeight;
    // console.log("h2 aukstis: ", aukstis); // testuojam
    return aukstis;
}
var x = getH1ElementoAukstis();
console.log("aukstis", x);

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu 
//(ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
     return vidurkis;
}
var x = getPazymiuVidurkis2(3, 5, 7, 9, 1);
console.log("vidurkis:", getPazymiuVidurkis2());


// =================FOR intro  ======================

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

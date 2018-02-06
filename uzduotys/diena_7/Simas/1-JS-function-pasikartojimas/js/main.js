console.log(" Labas ");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// write program skirta isvesti i ekrana, siuo atveju jinai i body ides bolded teksta "Mano tekstas" su clase "bg-into"
// document.write(" <b class='bg-info'> Mano tekstas </b> ");

// window.alert("labas");
// alert("Viso");

// issoka langas ir praso ivesti teksta, kuris taps kintamuoju
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);


// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// veiki pagal css taisykles ".class", "#id", "h1".
// innerHTML keicia surasto elemento vidu
// var x = document.querySelectorAll("") grazins viska, o su array x[] selector galesi pasirinkti kuri tiksliai nori paskeisti.


//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;
// var aukstis = document.querySelector('h1').clientHeight;
// console.log(aukstis);
   // clientHeight includes the height and vertical padding.

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
    document.write("Kaina " + x + "<br>")
}
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis () {
    var x1 = 5;
    var x2 = 10;
    var x3 = 8;
    var x4 = 6;
    var x5 = 8;
    var x = (x1 + x2 + x3 + x4 + x5)/5;
    console.log ("Pazymiu vidurkis:", x);
}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    var x = (x1 + x2 + x3 + x4 + x5)/5;
    console.log("Pazymiu vidurkis1:", x)
    // arba
    document.write("Pazymiu vidurkis1: " + x + "<br>")
}
pazymiuVidurkis1(5, 10 , 8 , 6 , 8);

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
// var vardas = "Tomas"; //global - nelaikinas kintamasis
function getVardas() {
    var vardas = "Tomas"; //local - laikinas kintamasis
    return vardas;
}

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var pavarde = "Tomauskas"; //local - laikinas kintamasis
    return getVardas() + " " + pavarde;    
}
// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// ++++++ 1 function ++++++++++++
// function getH1ElementoAukstis () {
//     var h1Aukstis = document.querySelector("h1").clientHeight;
//     return h1Aukstis;
// }

// ++++++++++ 2 function daranti ta pati +++++++++++
function getH1ElementoAukstis() {
    var h1Elementas = document.querySelector("h1");
    var aukstis = h1Elementas.clientHeight;
    return aukstis;
    
}

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")


function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    var pazVidurkis = (x1 + x2 + x3 + x4 + x5)/5;
    var iskvietimas = window.alert("Pazymiu vidurkis yra: " + pazVidurkis);
    return iskvietimas;
}

// =================FOR intro  ======================



//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

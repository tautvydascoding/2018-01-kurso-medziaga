console.log(" Labas ");


//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// // window.alert("labas");
// // alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
//
// console.log(ivestasTekstas);


document.querySelector('h1').innerHTML = " <b>ANTRASTE</b>";
//komanda quarySelector all[kelinta pazymeti] - suranda visas komandas;
//querySelector - paieskos/selector komanda (veikia pagal CSS taisykles pvz: ".class", "#id")
// innerHTML - keicia surasto HTML elemanto vidu



// ----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding. Matuoja auksti antrastes.
console.log(aukstis);

// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
//


// =====================PASIKARTOJIMAS==================
//
//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
function (printKaina(x) {
    var kaina = 999.00
    var kaina = 13.49
    var kaina =
}
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
//
// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
//
// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
//
//
// =====================RETURN==================
//
// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
//
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja
//
// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
//
//
// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//
//
// =================FOR intro  ======================
//
// ==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
// ================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

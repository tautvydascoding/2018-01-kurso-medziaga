console.log(" Labas ");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================

//
// // ===================pasikartoti  F-jas===================
// //  01 UZDUOTIS
// // sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// // atspausdinti visus kintamuosius
//
var vardas = "Laura";
var pavarde = "Kasinskaite";
var klase = 12;

console.log("Mano informacija:", vardas, pavarde, klase);

// //  02 UZDUOTIS
// // sukurti funkcijas:
// // printName()  printLName(), printClass() ,
// // kurios atspausdina i konsole pirmos uzduoties kintamuosius;

function printName() {
    console.log("Vardas", vardas);
}
printName();


function printLName() {
    console.log("Pavarde", pavarde);
}
printLName();

function printClass() {
    console.log("Klase", klase);
}
printClass();
//
// //  03 UZDUOTIS
// // parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// // kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem
//

var vardas1 = "Tomas";
var pavarde1 = "Tomauskas";
var klase1 = 5;

var vardas2 = "Jonas";
var pavarde2 = "Jonaitis";
var klase2 = 3;

function printVardasPavardeKlase(vardas, pavarde, klase) {
    console.log("Pirmas mokinys:", vardas, pavarde, klase);
    console.log("Antras mokinys:", vardas1, pavarde1, klase1);
    console.log("Trecias mokinys:", vardas2, pavarde2, klase2);
}
printVardasPavardeKlase(vardas, pavarde, klase);



// // =====================JS zaidimas=========================
//
// // suzaisti JS zaidima Code Combat
//
//
//
// //////////////////////////////////////////////
// 1) pasikartoti java script “return” zodeli
// // 2 UZDUOTIS
// // sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// // parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// // patikrinti ar veikia f-ja

var alga = 500;
var pavarde = "Pietkus";

function getPavarde() {
 return pavarde;
}
var x = getPavarde();
console.log("Mano draugo pavarde", x);
console.log("Mano draugo pavarde", x);

//
//
// // 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
document.write(" <section> Mano tekstas su JS </section> ");


// // sukurti f-ja, kuri i ekrana isveda “<h2> uz lango stringa, kad ir kai pkeista </h2>”
//
// function functionName() {
//     document.write(" <h2> Mano tekstas su JS </h2> ");



// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)


// // A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// // B) su js paimti jo auksti ir atspausdinti
var aukstis = document.getElementById('section').offsetHeight;

// // C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?
//
// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/
//
// ///////////////////////////////////////////////
// pasikartoti IF
//
// sukurti js zaidima, popierius , akmuo, zirkles :
// https://www.codecademy.com/courses/javascript-beginner-en-Bthev-mskY8/0/1
//
//
// // pasikartoti antradieni
// // parasyti f-ja "getPelnas(pajamos, mokesciai, mokesciai2)", kuri apskaiciuoja pelna is  paduotu pajamu atimdama paduotus mokescius, ir poto vel atimdama mokescius2
// // pajamos 1500, mokesciai 2.5%, mokesciai2  1.5%
//
//
// // pasikartoti IF
// // sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// // kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// // kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// // kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
//
//
// // itvirtinti f-jas
//
// // UZDUOTIS
// // A) sukurti kintamaji "vardas" Tomas
// // B) sukurti 50 f-ju.
// // nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// // nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// // lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// // lygines f-jos turi pakeisti varda ir uzdeti skiaciu salia
// // NOTE: visas f-jas iskviesti
// // pvz.:
// var vardas = "Tomas";
// // 1
// function getVardas1() {
//   return vardas + "1";
// }
// var x = getVardas1();   // arba  console.log(  getVardas1() );
// console.log(  x );
//
// // 2
// function setVardas2(name) {
//    vardas = name + "2";
// }
// setVardas2("antanas"); // sugalvoti vis kita zodi
//
// // 3
// function getVardas3() {
//   return vardas + "3";
// }
// x =  getVardas3();  // arba  console.log(  getVardas3() );
// console.log(  x );
//
// // 4
// function setVardas4(name) {
//    vardas = name + "4";
// }
// setVardas2("juozas"); // sugalvoti vis kita zodi
//
// // 5
// ....
// ...
// ...

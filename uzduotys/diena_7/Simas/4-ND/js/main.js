// 1) pasikartoti java script “return” zodeli
// // 2 UZDUOTIS
// // sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// // parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.  
// // patikrinti ar veikia f-ja
var alga = 500;
var pavarde = "Pietkus"
function getPavarde() {
    return pavarde;
}


// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// // sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
function h2Keitimas() {
    document.write("<h2> uz lango singa, kad ir kaip keista </h2>");
}
// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)
var aukstis = document.querySelector("section").offsetHeight;

console.log(aukstis);

// // A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// // B) su js paimti jo auksti ir atspausdinti
// // C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?

// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/
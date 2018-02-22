console.log(" Labas ");
// 1) pasikartoti java script “return” zodeli
// // 2 UZDUOTIS
// // sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// // parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// // patikrinti ar veikia f-ja
var alga = 500;
var pavarde = "Pietkus";
function getPavarde(x) {
    var alga = 500;
    var pavarde = "Pietkus";
    return pavarde;
}
var x = getPavarde();
console.log(x);
//
//
// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// // sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
//

function getH2Elementa() {
    var x = document.querySelector("h2");
    console.log(x);
x.innerHTML = "<h2> Uz lango sninga </h2>";
    console.log(x);
}
getH2Elementa(x);
// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)
// // A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// // B) su js paimti jo auksti ir atspausdinti
// // C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?
//
function printAuksti {
 aukstis = document.getElementById('section').offsetHeight;
return aukstis;

}
printAuksti (aukstis);
// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/

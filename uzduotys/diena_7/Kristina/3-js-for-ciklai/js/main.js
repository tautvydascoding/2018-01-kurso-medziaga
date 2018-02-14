console.log(" Labas ");

// for (var i = 0; i < 100; i++) {
// console.log("i = ", i);
// }

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti "#" tiek, kad gautusi trikampio vaizdas
// 50 kartu

// for (var i = 0; i < 50; i++) {
//     var x = x + "#";
//     console.log(x);
// }

//
var x = "";
for (var i = 0; i < 50; i++) {
    x = x + "#";
    console.log(x);
}

console.log("11 daliname is 3. liekana yra ", 11 % 3);


 // ND----------------------------

 //1) pasikartoti java script “return” zodeli
// 2 UZDUOTIS
// sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.  
// patikrinti ar veikia f-ja

var alga = 500;
var pavarde = "pietkus";
function getPavarde() {
	return pavarde;
}
console.log(getPavarde());


//2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”

//3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)
// A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// B) su js paimti jo auksti ir atspausdinti
// C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?

//4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
//plain js
//https://plainjs.com/javascript/manipulation/
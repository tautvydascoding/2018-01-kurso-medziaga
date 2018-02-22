console.log(" Labas ");

// sukuriamas DOM (html medzio) objektas / NODE "header"
var manoHeader = document.createElement("header");
// console.log(manoHeader);

var tekstas = document.createTextNode("Antraste!!");
// i susikurta header obj idedame teksto obj
manoHeader.appendChild(tekstas);
// console.log(manoHeader);

// document.querySelector('body').appendChild(manoHeader);
// pasirenkame kur ideti        pasirenkame ka idet

//headeri idesime virs h1
var manoH1 = document.querySelector('h1');
//insertBefore(KaIdeti, PriesKa)
// !!! reik nurodyti body vietoj querySelector
document.body.insertBefore(manoHeader, manoH1);

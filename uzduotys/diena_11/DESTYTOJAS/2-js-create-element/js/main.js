console.log(" Labas ");




// sukuriamas DOM objektas/ NODE "header"
var manoHeader = document.createElement("header");
// console.log(  manoHeader );

var tekstas = document.createTextNode("Antraste!!");

// i susikuta header objektas idedame tekto objekta
manoHeader.appendChild( tekstas );
// console.log(  manoHeader );

// document.querySelector('body').appendChild(  manoHeader );

// headeri idesime virs H1
var manoH1 = document.querySelector('h1');
// insertBefore(kaIdeti, PrieKa) -
// !!! reik document.body
document.body.insertBefore( manoHeader, manoH1 );



//

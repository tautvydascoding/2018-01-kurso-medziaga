console.log(" Labas ");



// <aside>  elemento objekto (Node) kurimas

////sukuriamas DOM objektas/NOTE "header"
var manoHeader = document.createElement("header");
console.log( manoHeader);

var tekstas = document.createTextNode("Antraste!!");

// i susikurta header objektas idedame teksto objekta
manoHeader.appendChild( tekstas);
console.log( manoHeader);

// document.querySelector("body").appendChild( manoHeader);
//((!!!sukurus elementa, ideti ji i puslapi. Note paziureti su inspect ar atsirado psl))


//header idesime virs H1.
var manoH1 = document.querySelector('h1');
//insertBefore(kaIdeti, PrieKo)
//!reikia nurodyti kur ieskoti-BODY
document.body.insertBefore( manoHeader, manoH1 );


// console.log(elmAside);
//
// // paprasto teksto rasymas
// var elmText = document.createTextNode("lorem lorem lorem");
// // or
// //elmAside.innerHTML += "lorem lorem lorem2";
//
// console.log(elmText);
//
// // elemento idejimas i kita elementa
// elmAside.appendChild(elmText);
// //console.log(elmAside);
//
// // ! sukurti elementai - buna dar neideti i window  document html puslapi
//
// //=============
// //  objekto (Node) idejimas i HTML
// var elmH1 =  document.querySelector("h1");
// document.body.insertBefore(elmAside, elmH1);
// // document.body.appendChild(elmAside);
// //==============

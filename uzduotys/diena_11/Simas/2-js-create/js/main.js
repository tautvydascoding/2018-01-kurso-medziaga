
// <aside>  elemento objekto (Node) kurimas
var elmAside = document.createElement("aside");

// sukuria DOM objekta/NODE "header"
var manoHeader = document.createElement("header");
console.log(manoHeader);


// paprasto teksto rasymas
var elmText = document.createTextNode("lorem lorem lorem");

var tekstas = document.createTextNode("Antraste!")
// or
//elmAside.innerHTML += "lorem lorem lorem2";
console.log(tekstas);

console.log(elmText);

// elemento idejimas i kita elementa
manoHeader.appendChild( tekstas )
//i susikurta header objekta idedame teksto objekta
console.log(manoHeader)
elmAside.appendChild(elmText);
//console.log(elmAside);

// querySelector nurode kur, or appendChild nurode ka ideti
document.querySelector("body").appendChild( manoHeader);

// header idesime virs h1
//insert before comandai reikia nurodyti ka ideti ir pries ka
var manoH1 = document.querySelector( "h1" );
//reikia butinai nurodyti body
document.body.insertBefore( manoHeader, manoH1 );

// ! sukurti elementai - buna dar neideti i window  document html puslapi

//=============
//  objekto (Node) idejimas i HTML
var elmH1 =  document.querySelector("h1");
document.body.insertBefore(elmAside, elmH1);
// document.body.appendChild(elmAside);
//==============
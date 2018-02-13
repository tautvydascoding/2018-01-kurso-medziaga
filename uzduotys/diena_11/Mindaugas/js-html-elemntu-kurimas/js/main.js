

// <aside>  elemento objekto (Node) kurimas
// var elmAside = document.createElement("aside");

var manoHeader = document.createElement("header");
console.log(manoHeader);
var tekstas = document.createTextNode("antraste!!!");

manoHeader.appendChild(tekstas);
document.querySelector('body').appendChild(manoHeader);

// headeri idesime virs h1
var h1 = document.querySelector('h1');
document.body.insertBefore(manoHeader, h1);

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

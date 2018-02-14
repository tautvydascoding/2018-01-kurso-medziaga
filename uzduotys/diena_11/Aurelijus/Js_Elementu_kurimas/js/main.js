console.log(" Labas ");

// <aside>  elemento objekto (Node) kurimas
// var elmAside = document.createElement("aside");

var manoHeaderis = document.createElement("header");    //Sukuria objekta
// console.log(manoHeaderis);

var tekstas = document.createTextNode("Antraste");
manoHeaderis.appendChild(tekstas);                  //i susikurta header obj idedame teksto objekta
// console.log(manoHeaderis);

//var manoBody = document.createElement("body");
//console.log(manoBody);                                             //sukurti create
document.querySelector('body').appendChild(manoHeaderis);           //ieskoti querySelector

//sukurus elementa, reikia ideti elementa i svetaine

var manoH1 = document.querySelector('h1');
//insert before reikia nurodytu du kintamuosius: ka ideti, pries ka ideti
//butinai reikia nurodyti body
document.querySelector.body.insertBefore(manoHeaderis, manoH1);

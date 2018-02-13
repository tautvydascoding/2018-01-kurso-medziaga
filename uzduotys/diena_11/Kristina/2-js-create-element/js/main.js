console.log(" Labas ");

var manoHeader = document.createElement("header"); // sukuria DOM obj/NODE "header" (viso html medzio)
// console.log(manoHeader); 

var tekstas = document.createTextNode("Antraste");

manoHeader.appendChild(tekstas); // i susikurta header objekta idedame teksto objekta 
// console.log(manoHeader);

document.querySelector("body").appendChild(manoHeader);

// headeri idesime virs h1
var manoH1 = document.querySelector("h1");
//insertBefore( reikia nurodyt ka idet, ir pries ka idet) ir nurodyt body
document.body.insertBefore(manoHeader, manoH1);


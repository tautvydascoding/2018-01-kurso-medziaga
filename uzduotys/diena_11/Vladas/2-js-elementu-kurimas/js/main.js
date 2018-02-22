console.log(" Labas ");


var manoHeader = document.createElement("header"); // sukuria objekta (DOM)
// console.log(manoHeader);

var tekstas = document.createTextNode("Antraste!!!");  // sukuria teksta

manoHeader.appendChild(tekstas);    //iterpia teksta i susikurta objekta
// console.log(manoHeader);

document.querySelector("body").appendChild(manoHeader); //isvedam objecta i html ekrana


//header idedi virs h1
var h1 = document.querySelector("h1");
document.body.insertBefore(manoHeader, h1);

console.log(" Labas ");



// sukuria DOM objekta / NODE "header"
var manoHeader = document.createElement("header");
console.log(manoHeader);


var tekstas = document.createTextNode("Antraste!!");
// i sukurta header objekta, idedame teksto objekta
manoHeader.appendChild(tekstas);
console.log(manoHeader);
//  sukurus elementa nepamirsti ideti ji i svetaine querySelector("body")
document.querySelector("body").appendChild(manoHeader);

// headeri idesime virs h1
var manoH1 = document.querySelector("h1");
//  insertBefore reik nurodyti ka ideti ir pries ka ideti
//  !!! butinai nurodyti i kur ideti
document.body.insertBefore(manoHeader, manoH1);

// ---------------------jquery -------------------


$("h1, h2").css("color", "blue");
$("li:last").css("color", "green");
$("li").last().css("color", "red");
$("li:not(.reklama)").css("color", "yellow");

$("input[name= "vardas"]").val("Juozas");
$("input[name= "pastas"]").val("a@a.lt");

$("h2").next().css("color", "blue");
$("h2").nextUntil(".noname").css("color", "green");

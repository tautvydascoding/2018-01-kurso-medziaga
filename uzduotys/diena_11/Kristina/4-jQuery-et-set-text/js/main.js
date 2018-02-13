console.log(" Labas ");


var tekstas = $("h1").text(); // nes jei be var tekstas = tada paselektins bet isgaruos
console.log(tekstas);
$("h1").text(tekstas + " pakeistas");
$("h1").html(tekstas + " <strong> pakeistas </strong>");

var a = $("h1")[0]; // grazina tiesiog html elm (dom)
var b = $("h1").eq(0); // cia jquery OBJEKTAS, issirenki numeriu kuri nori, veiks visos komandos, grazina su visokiausiais kintamaisiais
var c = $("h1");// jquery grazina visus h1
console.log(a, b, c);

//error, neveiks nes a.css - DOM elementas, blokas teksto
// a.css("background-color", "yellow");
b.css("background-color", "green");
// c.css("background-color", "red");
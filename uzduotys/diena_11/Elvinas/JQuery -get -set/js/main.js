console.log(" Labas ");

var tekstas = $("h1").text();
console.log(tekstas);
$("h1").text(tekstas + "<strong> Pakeistas </strong>"); // tag'ai neveikia
$("h1").html(tekstas + "<strong> Pakeistas </strong>");

var a = $("h1")[0]; //DOM htm objektas
var b = $("h1").eq(0); //jq objektas
var c = $("h1");
console.log(a, b, c);

// neveiks nes tai DOM elementas
// a.css("background-color", "yellow");
b.css("background-color", "green");
// c.css("background-color", "red");

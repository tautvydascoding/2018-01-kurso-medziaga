var tekstas = $('h1').text();
console.log(tekstas);
$('h1').html(tekstas + "<strong> Avokadas </strong>");

// var elm = $('h1').eq(0);
// var elm2 = $('h1')[];

var a = $('h1')[0]; // DOM html elementas
var b = $('h1').eq(0); // jq objektas ! veiks visos jq komandos
var c = $('h1'); //

console.log(a, b, c);

// a.css("background-color", "yellow"); error neveiks nes tai dom elementas
b.css("background-color", "green");
// c.css("background-color", "red");

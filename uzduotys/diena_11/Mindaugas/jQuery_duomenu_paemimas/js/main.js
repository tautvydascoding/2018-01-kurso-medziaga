var tekstas = $('h1').text();
console.log(tekstas);

$('h1').text(tekstas + " pakeista antraste");


var a = $('h1')[0]; //DOM HTML elementas
var b = $('h1').eq(0); // Objektas
var c = $('h1');
console.log(a, b, c);

// a.css('background-color', 'yellow'); nekeicia nes dom elementas
b.css('background-color', 'green'); // nudazo zaliai
c.css('background-color', 'red'); // perdazo visus elementus

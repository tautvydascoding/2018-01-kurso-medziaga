console.log(" Labas ");


var tekstas = $('h1').text();
console.log( tekstas );
  $('h1').text(  tekstas  + " <strong> Pakeistas </strong> "); // tag'ai neveiks - bus isvesti
  $('h1').html(  tekstas  + " <strong> Pakeistas </strong> ");


  var a = $('h1')[0];       // DOM html elementas
  var b = $('h1').eq(0);  // jq Objektas ! veiks visos jq komandos
  var c = $('h1');

  console.log(a, b, c);

  // a.css("background-color", "yellow"); // ERROR neveiks nes tai DOM elementas
  b.css("background-color", "green");
  // c.css("background-color", "red");

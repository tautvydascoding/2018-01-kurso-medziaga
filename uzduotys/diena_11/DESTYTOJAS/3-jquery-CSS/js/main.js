console.log(" Labas ");

$("h1, h2").css("color", "blue");

$('li:last').css("color", "green");
$('li').last().css("color", "red");

$('li:not(.reklama)').css("color", "yellow");

//
$('input[name="vardas"]').val("Juozas");
$('input[name="pastas"]').val("a@a.lt");

$('h2').next().css("color", "red");
$('h2').nextUntil('section').css("color", "green");  // !!! tik su elementais, su class neveiks

//

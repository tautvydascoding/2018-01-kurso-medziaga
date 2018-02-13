console.log(" Labas ");

$(function() {

});

$("h1, h2").css("color", "blue");
$("li").last().css("color", "green");
// $( "li:last" ).addClass( "selected highlight" );

$( "li:not(.spec" ).css("color", "red");
//pakeicia visus kurie nturi klases spec

$('input[name="vardas"]').val("Juozas");
$('input[name="pastas"]').val("a@a.lt");

$("h2").next().css("color", "red");

$("h2").nextUntil('.noname').css("color", "green"); //tik su elementais, su class neveiks.
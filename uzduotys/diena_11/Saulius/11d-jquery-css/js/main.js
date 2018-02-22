$("h1, h2").css("color", "blue");
$("li").last().css("color", "green");
$("li:not(.reklama)").css("color", "yellow");
// dvieju elemenntu selectinamas kai pirmi parametrai uzsimeta pirmam o kiti visiem
$( "header" ).css( "font-size", "8px" ).add( "h2" ).css( "background", "yellow" );
// selectinimas pagal atributus
$('input[name="vardas"]').val("Juozas");
$('input[name="pastas"]').val("a@a.lt");
// selectinam tik pirmos eiles section vaikus h2
$("section > h2").css("background", "green");

$('h2').next().css("color", "red");
//!! tik su elementais. su class neveiks
$('h2').nextUntil('section').css("background", "brown");

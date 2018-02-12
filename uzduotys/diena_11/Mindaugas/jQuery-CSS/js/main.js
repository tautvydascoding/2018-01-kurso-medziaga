// pakeisti visu h elementu spalva i raudona
$("h1, h2, h3").css("color", "red");

// pakeisti paskutinio li elemento spalva i zalia css komanda li:last
$("li").last().css("color", "green");

//  jQuery galima nurodyti toki selektinima: ieskome elemento x, kokiame teve

// $("h1", "form").addClass("bar");

$("input[type='text']").val("Juozas");
$("input[type='email']").val("a@a.lt");

$('h2').nextUntil('h3').css("color", "blue");

console.log(" Labas ");

var myCss = {
    color: "green",
    width: "300px"
};
$("h1").css(myCss);

$( "h1, h2" ).css( "color", "blue" );

// $( "h1" ).css().add( "h2" ).css( "background", "yellow" );


$( "li" ).last().css( "color", "yellow" );


$("li:not(.spec)").css("color", "green");

$('input[name="vardas"]').val("Juozas");
$('input[name="pastas"]').val("a@a.lt");

$("h2").nextAll().css("color", "red");

$("h2").nextUntil("ul").css("color", "yellow");

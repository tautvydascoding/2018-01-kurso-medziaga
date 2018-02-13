console.log(" Labas ");
// ---------------JS budu--------------

var  sekcija = $ ("<section></section>").html("<h1> Mokomes </h1>");
console.log(sekcija);

sekcija.appendTo("body");

// var elementas = document.querySelector("h1");  //surandi pati pirma h1
// elementas.className += "bg-info mt-5 aukstis-200";

// var elementas = document.querySelectorAll("h1"); // suras visus h1 ir sudes i masyva
// elementas.className += "bg-info mt-5 aukstis-200";



// ------------------Jquery budu--------------------

$("a").click(function() {
$("h1:first").addClass("bg-warning mt-5 aukstis-100");

} );

//  arba
// $("h1:first").attr("bg-warning mt-5 aukstis-100");

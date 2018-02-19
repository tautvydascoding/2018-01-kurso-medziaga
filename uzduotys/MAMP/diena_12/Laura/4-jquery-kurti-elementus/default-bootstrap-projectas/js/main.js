console.log(" Labas ");


//js budas:

// KURTI NAUJA ELEMENTA-SEKCIJA
// var section = $('<section></section>').html('<h1>Mokomes</h1>');
// console.log( section);
//
//
// section.appendTo("body");  //
//
//
// ///pvz klasiu dejimas. Ant H1 dedame klases. (suradome pirma selektoriu)
// var elementas = document.querySelector('h1');      ///suras tik pati pirma
// elementas.className += "bg-info mt-5 aukstis-200";
//
//
// var elementas = document.querySelectorAll('h1');  //suras visus elementus;
// elementas[1].className += "bg-info mt-5 aukstis-200";

///// jQUERY budas


$('a').click(  function()     {
    $('h1:first').addClass('bg-warning mt-5 aukstis-100');
    // $('h1:first').attr('class', 'bg-warning mt-5 aukstis-100');

});

console.log(" Labas ");

// $('<section/>')
var sekcija = $('<section></section>').html('<h1>MOKOMES</h1>'); // jis db skraido todel reikia ji padaryti kintamuoju
console.log(sekcija);

sekcija.appendTo("body"); // appendTo kaip JS appendChild


//pvz ant h1 elemento/tago uzdesim klases;-------JAVA SCRIPT---------------

// var elementas = document.querySelector('h1'); // suras tik pirma h1, o querySelectorAll - uzdes visiem
// elementas.className += "bg-info mt-5 aukstis-200";

// var elementas = document.querySelectorAll('h1'); // suras tik pirma h1, o querySelectorAll - uzdes visiem
// elementas[1].className += "bg-info mt-5 aukstis-200"; // duoda jau kaip masyva todel reikia nurodyti stalciu ty kuri elm nori

// --------- TA PATI SU J QUERY ---------------

// $('h1:first').addClass('bg-warning mt-5 aukstis-100');
// // arba bet nelabai, gudravimas
// $('h1:first').att('class','bg-warning mt-5 aukstis-100');

$('a').click(function() {
	$('h1:first').addClass('bg-warning mt-5 aukstis-100');
});
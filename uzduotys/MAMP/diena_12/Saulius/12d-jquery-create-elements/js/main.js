console.log(" Labas ");


// $('footer') selectorius (ieskos elemento)
//$('<footer></footer>') naujas html elementas (ne selectins o sukurs)
//? $('<h1/>') beroc ir atidarymmas ir uzdarymas


//html elemento sukurimas, irasymas i kintamaji ir isvedimas i konsole
var sekcija = $('<section/>').html('<h1>Mokomes</h1>');
console.log(sekcija);

sekcija.appendTo('body');

// vanilla js klases uzdejimas
// var d = document.querySelector('h1'); // suras pati pirma h1
// d.className += "bg-success aukstis-200";
// //arba
// d.classList.add("text-center");
// var d = document.querySelectorAll('h1');// suras visus h1 ir sudes i masyva
// d[1].className += "bg-success aukstis-200";

// qjuery klases uzdejimas
// $('h1:first').addClass('bg-success mb-5 aukstis-100');
// $('h1:first').attr('class', 'bg-success mb-5 aukstis-100');// kitas budas bet panaikina jau esancias klases

//paspaudus a ant h1 uzsides klases
$('a').click(function() {
    $('h1:first').addClass('bg-success mb-5 aukstis-100');
    $('a').hide('9000', function() {
    });
});

var sekcija = $("<section></section>").html("<h1>Mokomes programuoit</h1>");
console.log(sekcija);

sekcija.appendTo(" body ");

// js budu-----------ant h1 uzdedame klases
// var elementas = document.querySelector("h1");// suras tik pirma
// elementas.className += " bg-info mt-5 aukstis-200";

// var elementas = document.querySelectorAll("h1"); //suras visus
// elementas[1].className += " bg-info mt-5 aukstis-200";

//------------jQuery budu-----------------
// $("h1:first").addClass("bg-warning mt-5 aukstis-100");//first paveike tik pirma h1
// //arba
// $("h1:first").attr("class", "bg-warning mt-5 aukstis-100");//tas pats tik su atributais

$("a").click(function() {
    $("h1").addClass("bg-info mt-5 aukstis-100");//first paveike tik pirma h1
    //arba
    $("h1:first").attr("class", "bg-warning mt-5 aukstis-100");//tas pats tik su atributais
});
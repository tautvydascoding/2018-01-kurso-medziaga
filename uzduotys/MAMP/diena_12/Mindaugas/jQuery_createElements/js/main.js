// sukurti section jame ideti h1

var section = $('<section></section>').html('<h1>Mokomes su jQuery kurti elementus</h1>');
document.write(section); //isveda object


section.appendTo("body");


// jQuery budu----------------



$('a').click(function(){
    $('h1:first').addClass("bg-info mt-5 aukstis-100");
});

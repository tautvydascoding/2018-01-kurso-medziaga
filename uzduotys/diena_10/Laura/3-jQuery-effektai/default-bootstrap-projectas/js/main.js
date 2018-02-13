console.log(" Labas ");

//paslepsime HTML h1 elementa
$('h1').hide(3000);  //nurodomas laikas kiek isnykti


$('H2').click(function(){

});

$('h2').click(function(event) {        //ant ko paspaudus;
    $('h3').hide(3000);           //programuoju kas nutinka.ant 2 paspaudziu, 3 isnyksta.
});


$('h2').mouseenter(function(event) {
    $('h2').css('color', 'blue');
});


$('h4').css("position", "absolute");
$('h4.melynas').animate(
{
    "width" : "600px";
    "height" : "200px",
    "font-size" : "80px",
    "right" : "5px",
    "top" : "50px"
    }, 3000
);

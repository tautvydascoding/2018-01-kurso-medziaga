console.log(" Labas ");


$('h1').hide(3000);  //3000 = 3sec

$(function(){
    $('h2').hide(5000);
});

$('h3').click(function(event){  //ant ko paspaudi
    $('h4').hide(2000);             //kas nutinka
});


$('h2').mouseenter(function(event){
    $('h2').css('color','blue');
});

$('h4').css("position","absolute");
$('h4.melynas').animate(
{
    width: "600px",
    height: "200px",
    "font-size": "80px",
    "right": "5px",
    "top": "50px"
}, slow);

$('p').animate({
    width: "100px",
    height: "500px",
    "border": "solid"
 }, 3000);

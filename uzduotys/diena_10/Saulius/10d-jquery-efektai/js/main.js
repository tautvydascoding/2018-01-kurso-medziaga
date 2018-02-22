console.log(" Labas ");
//

//visas kodas veiks tik kai bus parsiustas visas html ir css
$(function(){

    $("h1").hide(3000); // 3sek. paslepiam h1 elementa

$("h2").click(function(event) {
    // virsuj ka paspaudus apacioj kas nutinka
    $("h3").hide(2000);
});
$("h2").mouseenter(function() {
    $("h2").css("color", "blue");
});

$("h3").hover(function() {
    $("h3").css("color", "blue");
}, function() {
    $("h3").css("color", "red");
});
$("h4").css("position", "absolute");
$(".melynas").animate(
    {
width : "450px",
height : "150px",
"font-size" : "80px",
"right" : "5px",
"top" : "5px"
}, 3000
);
$("h4").css("position", "absolute");
$(".melynas").animate(
    {
"right" : "50px",
"top" : "50px"
}, 3000
);







});

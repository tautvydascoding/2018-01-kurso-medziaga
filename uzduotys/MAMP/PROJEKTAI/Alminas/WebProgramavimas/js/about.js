
var image_tracker = "me1";

function change(){
    var img = $('.me');
    if (image_tracker == 'me1') {
        img.attr('src', 'images/me2.png');
        image_tracker = 'me2';
    }else{
        img.attr('src', 'images/me.png');
        image_tracker = 'me1';
    }
}
setInterval('change()', 2000);

$(document).ready(function(){
$('.para').fadeIn(4000, "swing");
$(".placiau_btn").click(function(){
$('.placiau_text').load("../php/includes/aboutme_full.php");
});
});

$(document).ready(function(){
    var comments = 2;
    $('.load_more').click(function() {
        comments = comments + 2;
        $('.comments2').load("../php/includes/comments.php", {
            newcount: comments
        });
    });
})



// kad griztu i ajax objekta;

var carousel = $(".carousel"),
    currdeg  = 0;

$(".next").on("click", { d: "n" }, rotate);
$(".prev").on("click", { d: "p" }, rotate);

function rotate(e){
  if(e.data.d=="n"){
    currdeg = currdeg - 60;
  }
  if(e.data.d=="p"){
    currdeg = currdeg + 60;
  }
  carousel.css({
    "-webkit-transform": "rotateY("+currdeg+"deg)",
    "-moz-transform": "rotateY("+currdeg+"deg)",
    "-o-transform": "rotateY("+currdeg+"deg)",
    "transform": "rotateY("+currdeg+"deg)"
  });
}




// ryskumas
$('.slenka').click(function() {
    $('body').animate({
        opacity: '0.9',
        });
    $('.registracija').addClass('centravimas');
            $('.vardas').animate({
                left:'250px',
                opacity: '1',
                width: '200px',
                height: '50px'
                });
                $('.mailas').animate({
                    left:'250px',
                    opacity: '1',
                    width: '200px',
                    height: '50px'
                    });
                    $('.slaptazodis').animate({
                        left:'250px',
                        opacity: '1',
                        width: '200px',
                        height: '50px'
                        });
});
$('.ieskoti').click(function() {
    $('.paieska').addClass('centravimas');
    $('.paieska').animate({
        // position: 'absolute',
        left: '250px',
        height: '100px',
        width: '350px',
        top: '50px',
        opacity:'0.9'
    })
});

$('.logo').hover(function() {
    $('.loganas').animate({
        width:'150px',
        height: '200px',
        shadow: '5px 5px 5px blue'

    })
}, function() {
    $('.loganas').animate({
        width: '100px',
        height: '100px',
        shadow: '2px 2px 2px red'
    })
});

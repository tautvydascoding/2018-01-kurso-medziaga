console.log(" Labas ");

// visas kodas veiks ti kai busparsiustas visas html ir css!!!!!!!
$(function(){
    $('h1').hide(3000); //3000 milisec ~ 3 milisec
    $('h2').click(function(event) {     //ant ko paspaudus
        $('h3').hide(2000);             //kas ir kam atsitiks
    });

    $('h2').mouseenter(function(event) {
        $('h2').css('color', 'blue');
    });

    $('h4').css("position", "absolute");
    $('h4.melynas').animate({
        width : "400px",
        height : "200px",
        "font-size" : "80px"
    }
);
    $('h4.melynas').animate({
        "right" : "5px",
        "top" : "50px"
    }
);

});

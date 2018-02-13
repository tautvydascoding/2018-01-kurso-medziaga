console.log(" Labas ");
//paslepsime html H1 elementa


$(function(){
    $( 'h1' ).hide(3000); //3000 = 3s
    $('h2').click( function(event) {  
        $( 'h3' ).hide(3000);
    });

    $('h2').hover( function(event) {  
        $( 'h2' ).css("color", "blue");
    });

    $('h4').css("position", "abolute");

    $('h4.melynas').animate( 
        {  
        width: "600px",
        height: "400px",
        "font-size": "80px"
    }, 3000
    );

    $('h4.melynas').animate( 
        {
        "right": "5px",
        "top": "50px"
    }, 3000
    );

    // $("p").on("click", function(){
    //     $(this).hide();
    // }); //sita geriausiai butu naudoti
    // jQuery methods go here..
 }); //si junkcija nurodo, kad reikia laukti kol parsius visa HTML and CSS ir tik tada js prades veikti


//=============get data=========
//.text()
//.html()
//.val()

// var otext = $("h1").text();  // return visu h1 turini
//console.log("h1 otext: " + otext);
var tekstas = $("h1").text();
    $("h1").text(tekstas + ' <strong> pakeistas </strong>'); //tag'ai neveikai - bus isvesti kaip tesktas
    $("h1").html(tekstas + ' <strong> pakeistas </strong>');

    var a = $("h1")[0];
    var b = $("h1").eq(0);
    var c = $("h1");

    // a.css("background-color", "green"); erroe neveiks nes tai dom elementas
    a.css("background-color", "green");
    a.css("background-color", "green");


// var oHTML = $("h1").html();
//console.log("h1 oHTML: " + oHTML);

//---- get only first h1 text------
// var elm = $("h1").eq(0);   // eq -  return the jquery selector
// var elm2 = $("h1")[0];     // [0] - return the DOM element
// console.log("eq(): " ,  elm) ;
// console.log("[0]: " ,  elm2) ;

// console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo




//=============SET text/ HTML / VAL=========
//.text(...)
//.html(...)
//.val(...)

//$("h1").text("Naujas h1 tekstas 1.1");
//console.log("h1 otext: " + otext);

// kaip innerHTML=   (!!!  istrina visa vidu)
// $("h1").html("<button> Registruotis </button>");
//console.log("h1 <button>: " + oHTML);

// Form'oje ivesti teksta uz vartotoja "val()"
//$("form input").val("Type Username here");

// $('form input').attr('value', 'Tomas');
// $('form input').attr('class', 'bg-info');
//---JS ---

//document.getElementsByTagName("input")[0].value = "Tomas";
//document.getElementsByTagName("input")[0].setAttribute('value','Tomas');
//document.myform.vardas.value = 'Tomas';
//                 <form name="myform">
//                         <input class="aa" name="vardas" type="text" value="" >
//                     </form>

//=====================================
//  objekto (Node) arba teksto - idejimas i HTML
//=====================================
// append(x, [y], [z], ... ) - Inserts content at the end of the selected elements (viduje, gale)

// prepend() - Inserts content at the beginning of the selected elements (viduje, pradzioje)
// after() - Inserts content after the selected elements (isoreje, po elemento)
// before() - Inserts content before the selected elements (isoreja, pries elementa)
// insertBefore();    // The .before() and .insertBefore() methods perform the same task.
// appendTo() - i kur perkelti si elementa

// var elementasH1 =   $("h1"),
//     appendText  = "<b>appended text</b>",
//     prependText = "<b>prepend text</b>",
//     afterText   = "<b>after text</b>",
//     beforeText  = "<b>before text</b>";

//elementasH1.append( appendText);
//elementasH1.prepend( prependText);
//elementasH1.after( afterText);
//elementasH1.before( beforeText);
//elementasH1.appendTo( "html");  // h1 perkels i html pabaiga

// ========tricks=====================
// perkels (nekopijuos)  elementa i kita  vieta
// $( "body" ).append( $( "h1" ) );

// Important: If there is more than one target element, however, cloned copies of the inserted element will be created for each target except for the last one.

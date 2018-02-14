function objektas (name, age) {
    this.name = name,
    this.age = age;
};
var objektas = new objektas (name, age) {
    this.name = name;
    this.age = age;
};


var zmogus = objektas ("tomas", 21);

//===============Create element==================
var elementas0 = "<p> <button>Register</button> </p>";
var elementas1 = "<p>" +
    "<button>Register</button>" +
    "</p>";


var elementas2 = $("<p> </p>").html("<button>Register</button>");
 // note: If a string is passed as the parameter to $(), jQuery examines the string to see if it looks like HTML (i.e., it starts with <tag ... >). If not, the string is interpreted as a selector expression
// note2: When passing HTML to jQuery(), note that text nodes are not treated as DOM elements. With the exception of a few methods (such as .content()), they are generally ignored or removed. eg: "<p>text</p> text" text may be removed
//var elementas2 = $("<p/>").html("<button>Register</button>"); // shortcut

// arba js

var elementas2 = document.createElement("p");
elementas2.innerHTML = "<button>Register</button>";
//==================
// more complex
$("<footer></footer>", {
   "class": " bg-info mt-2 ",
   text: "tekstas viduje tago",
   click: function() {
       $( this ).hide( );
   }
}).appendTo( "body" );

// <footer class='bg-info mt-2' onclick='function() {  $( this ).hide( ); }' > tekstas viduje tago </footer>

//=============delete===========
$("div").remove();  //  removes the selected element(s) and its child elements.
$("div").empty();  //   removes the child elements of the selected element(s).

$("p").remove(".test");         //removes all <p> elements with class="test":
$("p").remove(".test, .demo"); // removes elements with class="test" and class="demo":




//============= add Class ===============
// -------simple js------

var d = document.getElementById("div1");
d.className += " otherclass";
d.classList.add("otherclass");
d.classList.remove("otherclass");
d.classList.toggle('otherclass');

//   -------jQuery-CLASS-----

// addClass()     Adds one or more classes to the selected elements
// addClass( [function( index, curentClass)] ) - // NOTE: receives the INDEX position of the element in the set and the existing class name(s) as ARGUMENTS. Within the function, this refers to the current element in the set
// removeClass() - Removes one or more classes from the selected elements
// toggleClass() - Toggles between adding/removing classes from the selected elements
// hasClass("protected")
// is('.pretty.awesome')

//$("h1").addClass("specialSell");
//$( "p" ).removeClass( "myClass noClass" ).addClass( "yourClass" );

// $("h1").toggleClass('change_me newClass');

$("button").click(function(){
   $("h1, h2, p").addClass("blue");  // you can select multiple elements, when adding classes
   $("div").addClass("important");
});


//Given an unordered list with two <li> elements, this example adds the class "item-0" to the first <li> and "item-1" to the second.
// $( "ul li" ).addClass(function( index ) {
//    return "item-" + index;
// });


// $("h1").addClass( function( index, currentClass ) {
//    return index + currentClass;
// });
//add the "green" class to a div that already has a "red" class
// $( "div" ).addClass(function( index, currentClass ) {
//    var addedClass;
//
//    if ( currentClass === "red" ) {
//        addedClass = "green";
//        $( "p" ).text( "There is one green div" );
//    }
//    return addedClass;
// });

//=================has Class==============
if ( document.getElementById("MyElement").classList.contains('MyClass') ) {}
if ( document.getElementById("MyElement").className.match(/(?:^|\s)MyClass(?!\S)/) ) {}

// jQuery
if ( $('#MyElement').hasClass('MyClass') ) {}
// arba
$( 'p' ).is( ".blue, .red" );

//$( "div"  ).on( "click", function() {
//   if ( $( this ).is( ":first-child" ) ) {
//     $( "p" ).text( "It's the first div." );
//   } else if ( $( this ).is( ".blue,.red" ) ) {
//     $( "p" ).text( "It's a blue or red div." );
//   } else if ( $( this ).is( ":contains('Peter')" ) ) {
//     $( "p" ).text( "It's Peter!" );
//   }
//   });
//
// <div></div>
// <div class="blue"></div>
// <div></div>
// <div class="red"></div>
// <div><br/><span>Peter</span></div>
// <div class="blue"></div>
// <p>&nbsp;</p>


//=============set  attribute===============
//$("h2", 'article').attr('id','a1234');

//=====================================

//=====================================

//=====================================

//=====================================

//=====================================

//=====================================

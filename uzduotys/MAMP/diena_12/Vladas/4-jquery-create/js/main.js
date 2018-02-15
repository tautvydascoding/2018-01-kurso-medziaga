console.log(" Labas ");


var s = $('<section></section>').html('<h1>Mokomes</h1>');
console.log(s);
s.appendTo('body');


//============= add Class ===============
// -------simple js------

// var d = document.getElementById("div1");
// d.className += " otherclass";
// d.classList.add("otherclass");
// d.classList.remove("otherclass");
// d.classList.toggle('otherclass');

//   -------jQuery-CLASS-----

// $('h1:first').addClass('bg-warning mt-5 aukstis-100');

$('a').click(function () {
    $('h1:first').addClass('bg-success mt-5 aukstis-100');
}) ;

// addClass()     Adds one or more classes to the selected elements
// addClass( [function( index, curentClass)] ) - // NOTE: receives the INDEX position of the element in the set and the existing class name(s) as ARGUMENTS. Within the function, this refers to the current element in the set
// removeClass() - Removes one or more classes from the selected elements
// toggleClass() - Toggles between adding/removing classes from the selected elements
// hasClass("protected")
// is('.pretty.awesome')

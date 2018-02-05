

// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
//=========================================================





 var  skaiciai = [];
ARBA
 var skaiciai = new Array(100);  // geriau nenaudoti sito
console.log(skaiciai.toString());
console.log(parts.join(" "));

random
 var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
  var nuoPenkiasdesimtIki300 = Math.round(Math.random() * 250) + 50 ;
  
  
  //===========Array / Masyvu f-jos=========
  
  
 console.log(names.join());  // atspausdina visus Array elementus vienoje eiluteje (atskiria kableliais)
 
  names.length;  - suskaiciuoja masyvo ilgi
  fruits.sort();     // Sorts the elements of fruits 
  fruits.reverse();         // Reverses the order of the elements
  names.push("3 vaikai");  // i masyvo gala idedame papildoma nari
  
console.log("array " + names.toString() );  // masyvo visus elementus pavercia i viena teksto eilute
console.log("array " + names.join(" : ") ); // isvesa visa masyva vienoje eiluteje, atskiriant elementus/stalcius nurodytu skirtuku " : "
fruits.shift();            // Removes the first element is masyvo
fruits.unshift("Lemon");    // Adds a new element i masyvo pradzia

fruits.splice(2, 0, "Lemon", "Kiwi");
The first parameter (2) defines the position where new elements should be added (spliced in). 
The second parameter (0) defines how many elements should be removed. 
The rest of the parameters ("Lemon" , "Kiwi") define the new elements to be added.


var myGirls = ["Cecilie", "Lone"];
var myBoys = ["Emil", "Tobias","Linus"];
var myChildren = myGirls.concat(myBoys);     // Concatenates (joins) myGirls and myBoys


dalisVardu = names.slice(3); // copy nuo trecio masyvo elemento
var citrus = fruits.slice(1, 3); // copy nuo 1 iki 3 elemento

//====================Math======================

Math.PI;            // returns 3.141592653589793
Math.round(4.7);    // returns 5
Math.round(4.4);    // returns 4
Math.abs(-4.7);     // returns 4.7  // modulis (nuima minuso zenkla, jiegu skaicius neigiamas)
Math.floor(4.7);    // returns 4  returns the value of x rounded down to its nearest 
Math.ceil(4.4);     // returns 5   returns the value of x rounded up to its nearest 
Math.pow(8, 2);      // returns 64  kelimas laipsniu
Math.sqrt(64);      // returns 8  saknis


Math.random();     // returns a random number  0 iki 0.9999999
Math.floor(Math.random() * 11);      // returns a number between 0 and 10
Math.floor(Math.random() * 100);     // returns a number between 0 and 99

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}
max(x, y, z, ..., n)	Returns the number with the highest value
min(x, y, z, ..., n)	Returns the number with the lowest value

//=========================objects================\

var person = {
    firstName:"John",
    lastName:"Doe",
    age:50,
    eyeColor:"blue"
};

// ABRA 

var person = new Object();
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue";

 

// FOR ciklas, kuris skirtas begti per Obj- informacija
for (x in person) {
  console.log("reikme: " + person[x]);
}

// irgi tinkamas begti per masyva
vardai = ["Jonas", "Tomas", "Paulius"];
for (y in vardai  ) {
    console.log("masyvo reikme: " + vardai[y]); 
}


//=================GET VALUE===================
vardas = document.querySelector('input[name="firstname"]').value; 

// ==============Out put=====================
JavaScript Display Possibilities

Writing into the browser console, using   console.log() 
gime = prompt("Ivesk savo gimimo data");
console.log("Jusus gimimo data: ", gime);
Writing into an HTML element, using 	  innerHTML = "<h1>asdfds</h2>"
Writing into the HTML output using	  document.write()
Writing into an alert box, using	  window.alert()


// ===================js out put===================

pirmojiGalerija = document.querySelector('.galerija'); // SURANDA pirma
galerijos = document.querySelectorAll(".galerija");  // SURANDA VISUS
galerijos[0].style.color = "blue"; // pakeiciam  teksto spalva
galerijos[0].style.backgroundcolor = "red"; // pakeiciam  bg spalva
  tekstas = "<h2> Mano antraste </h2>";
galerijos[0].innerHTML += tekstas ;


//==============================================
// js - pati save iskviecianti f-ja
(function() {
    console.log("iskvieciau save");
})();


//===============redirect=======
        // similar behavior as an HTTP redirect // apsaugo vartotoja nuo Back neverendding loop
        window.location.replace("http://google.com");	
		
		// similar behavior as clicking on a link
		window.location.href = "http://google.com";

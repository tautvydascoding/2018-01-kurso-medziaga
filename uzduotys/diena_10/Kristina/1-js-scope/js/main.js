console.log(" Labas ");

console.log(window);
var x = 10;
console.log(window.x);


 

// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
	var vardas = "Tomas"; // local, nes var IR funkcijos viduje
	//nerodys nes privatus
}
// console.log(vardas); // error - vardas nepasiekiamas nes ji privatus/lokalus
printDuomenys();

//   UZDUOTIS  B
//  pabandykite i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;

function printDuomenys() {
	var vardas = "Tomas";
 	console.log(vardas) ;
}
printDuomenys();

//================local && global=========
var x = "x global";
function testLocalVar() {
   var y = "y local";
   z = "z global";
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
}
testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error - 1) nes sukurtas f-jos viduje, 2) sukurtas su var

//----------------------------------

var kakis = "juodas";
function testKakis() {
	var kakis = "baltas";
	console.log("kakis", kakis);
	console.log("this", this.kakis); //kaip pasiekti globalu - tetini kaki
}
testKakis();
console.log("kakis", kakis);
//======================TEKSTO ISVEDIMAS===============NAMIE---------


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"


function printAntraste(x) {

}

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================
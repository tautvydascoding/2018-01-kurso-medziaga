console.log(" Labas ");


console.log( window);
var x = 10;

console.log( window.x);


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
function printDuomenys() {
    var vardas = "Tomas";
    console.log( vardas);
}
printDuomenys();
//console.log( vardas);
////  pabandykite i konsole atspausdinti kintamaji "vardas";
// NOTE: gausite klaida "Is not defined".

// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

//   UZDUOTIS  B



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


// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error 1. nes sukurtas f-ijos viduje ir 2)sukurtas su "var".


//////////////UZDUOTIS:
//1.SUKURTI kintamaji su var kakis = "juodas";
//2. sukurti funkcija;
//3.sukurti funkcijos viduje var kakis = "baltas";
//4.atspauzdinti uz f-cijos;

var kakis = "juodas";
function printText() {
    var kakis = "baltas";
    console.log( "kakis", kakis);
    console.log("this funkcijos viduje", this.kakis); //this pasiekia GLOBAL reiksme.(arba tevini elementa, tecio kintamuosius)
}
printText();
console.log("kakis", kakis);

//======================TEKSTO ISVEDIMAS===============



//(pasikartoti)
//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greit pageres orai", "Vasaros vis salteja"

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme



//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================

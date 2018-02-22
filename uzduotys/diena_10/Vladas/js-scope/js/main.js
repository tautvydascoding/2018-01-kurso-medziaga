console.log(" Labas ");

console.log(window);


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys(){
    var vardas = "Tomas";
    console.log("vardas", vardas);
}
printDuomenys();
//   UZDUOTIS  B
//  pabandykite i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
function printDuomenys(){
vardas = "Tomas";
    console.log("vardas", vardas);
}
printDuomenys();
console.log(vardas);
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
console.log("x", x);
console.log("z", z);
// console.log("y", y);  // error

var a = "uz funkcijos";
function printTestas(a){
    var a = "viduje";
    console.log(a);
    console.log("this", this.a);   //this- naudoja tevo reikse (jei mazai reiksmiu globalu)
}
printTestas(a);
console.log(a);

//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

// function printAntraste(x) {
//
// }
// printAntraste("BMW pinga,nes daugeja")
// printAntraste("Greit pageres oras")
// printAntraste("printAntraste(x)asaros vis saltesnes")
//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================

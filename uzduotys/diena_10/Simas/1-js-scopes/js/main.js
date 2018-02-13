console.log(" Labas ");
console.log(window);
var x = 10;
console.log(window.x);
l
// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja
// function printDuomenys() {
//     var vardas = "Tomas"; //local - nes f-os viduje ir sukurtas su "var".
//     console.log(vardas)
// }
// console.log( vardas ); //error - vardas nepasiekimas, nes jis privatus/local

// printDuomenys();
//   UZDUOTIS  B
//  pabandykite i konsole atspausdinti kintamaji "vardas"
//  console.log(vardas);
// // NOTE: gausite klaida "undefined variable"


//================local && global=========
//var x = "x global";

// function testLocalVar() {
//    var y = "y local";
//    z = "z global";
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }
// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error 1) nes f-os viduje    2) sukurtas su "var".


// var kakis = "23";
// function hahaha() {
//     var kakis = "42";
//     console.log("juodas", kakis )
//     console.log("this.kakis - f-jos viduje", this.kakis); // paisekimas ~global(savo teciu kintamuosius) "var"
    
// }
// hahaha();
// console.log( kakis );

//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",



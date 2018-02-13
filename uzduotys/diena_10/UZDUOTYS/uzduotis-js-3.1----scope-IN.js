


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""



//================local && global=========
//var x = "x global";
//function testLocalVar() {
//    var y = "y local";
//    z = "z global";
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
//}
//testLocalVar();
//console.log("x", x);
//console.log("z", z);
//console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS
 // A) sukurti kintamaji var kakis = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var kakis = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos
 // var kakis = "juodas";
 // function testLocalVar() {
 //     var kakis = "baltas";
 //    console.log("kakis:", kakis);
 //    console.log("this.kakis - f-jos viduje: ",  this.kakis);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // testLocalVar();
 // console.log("kakis:", kakis);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

 //======================
 // var vardas = "Jonas";   // global - kintamasis
 // function myName ( vardas ) { //  vardas - local kintamasis
 //     console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // myName("PETRAS");
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


//=======================================

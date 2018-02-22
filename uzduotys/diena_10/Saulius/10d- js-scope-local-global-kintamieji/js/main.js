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
    var vardas = "Tomas";
    console.log(vardas);
}
printDuomenys();

//   UZDUOTIS  B
//  pabandykite i konsole atspausdinti kintamaji "vardas"
//  console.log(vardas); //mes undefined



//================local && global=========
var x = "x global";
function testLocalVar() {
   var y = "y local";
   z = "z global";  // be var kad ir funkcijos viduje bet globalus
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
}
testLocalVar();
console.log("x", x);
console.log("z", z);
//console.log("y", y);  // error nes turi var ir yra funkcijos viduje tataigi lokalus kintamasis

var kakis = "skystas";
function kakatronas() {
    var kakis = "kietas";
    console.log(kakis);
    console.log("this-f-jos-viduj", this.kakis);
}
kakatronas();
console.log(kakis);
console.log("this", this.kakis); // taip pasiekiamas globalus kintamasis. realiai this pasiekia tevini (savo tecio kintamasis)
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

console.log(" Labas ");

console.log(window);
var x =10;
console.log(window.x);
// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

//   UZDUOTIS  B
//  pabandykite i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;

function printDuomenys(){
    var vardas = "Tomas";           //privatus kintamasis(local), neisves i console, nes kintamsis funkcijos viduje ir su var
    console.log(window.vardas);}
printDuomenys();

function printDuomenys2(){
    vardas2 = "Tomas";              //globalus kintamasis, isves i console, nes kintamasis be var
    console.log(window.vardas);}
printDuomenys2();

//================local && global=========
var x = "x global";
function testLocalVar() {
   var y = "y local";       //jeigu yra dvi salygos: y funkcijos viduje ir yra 'var'
   z = "z global";
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
}
testLocalVar();
console.log("x", x);
console.log("z", z);
//console.log("y", y);  // error, nes var ir funkcijos viduje
//Jeigu randama klaida, kodas toliau nebeveikia

var kakis = "juodas";
function kintamujuScope(){
     var kakis = "baltas";
    console.log("lokalus ",kakis);
    console.log("this-zodelis, funkcijos viduje", this.kakis);        //this  - naudojamas pasiekti globalius(tevinius) kintamuosius
}
kintamujuScope();
console.log("globalus ",kakis);
//======================TEKSTO ISVEDIMAS===============
//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"
var masyvas = ["BMW pinga, nes daugeja", "Greit pageres orai", "Vasaros vis silteja"];
function printAntraste(){
    zet = 0;
    for(var i = 0; i < masyvas.length; i++){
        // console.log(masyvas[i]);
        zet = masyvas[0]
        console.log(zet);
    }
    return zet;
}
printAntraste();
printAntraste();
printAntraste();




//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================

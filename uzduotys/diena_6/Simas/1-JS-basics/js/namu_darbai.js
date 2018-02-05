// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


// ===================pasikartoti  F-jas===================
//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius
var vardas = "Andrius";
var pavarde = "Kaunietis";
var klase = 5;

console.log(vardas);
console.log(pavarde);
console.log(klase);

//  02 UZDUOTIS
// sukurti funkcijas:
// printName()  printLName(), printClass() ,
// kurios atspausdina i konsole pirmos uzduoties kintamuosius
 function printName() {
     console.log(vardas);
 }
 function printLName() {
     console.log(pavarde);
 }
 function printClass() {
     console.log(klase);
 }
 printName();
 printLName();
 printClass();


//  03 UZDUOTIS
// parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem
function printVardasPavardeKlase(name, lname, klase) {
    console.log(name, lname, klase);
    
}
printVardasPavardeKlase("Jonas", "Petraitis", 5);
printVardasPavardeKlase("Antanas", "Jonaitis", 9);
printVardasPavardeKlase("Petras", "Antanaitis", 7);

// =====================CSS Flex========================= 

// 1) suzaisti CSS Frog game

// =====================JS zaidimas========================= 

// suzaisti JS zaidima Code Combat
console.log(" Labas ");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


// ===================pasikartoti  F-jas===================
//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius

var vardas = "Tomas";
var pavarde = "Tomauskis";
var klase = "programeris"

console.log(vardas);
console.log(pavarde);
console.log(klase);

//  02 UZDUOTIS
// sukurti funkcijas:
// printName()  printLName(), printClass() ,
// kurios atspausdina i konsole pirmos uzduoties kintamuosius

function printVardas() {

  console.log(vardas)
}

printVardas();

function printPavarde() {

  console.log(pavarde)
}

printPavarde();

function printKlase() {

  console.log(klase)
}

printKlase();


//  03 UZDUOTIS
// parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem


function printVardasPavarde() {
  var vardas1 = "Jonas";
  var pavarde1 = "Jonainis";
  var pavarde2 = "Antaninis"
  var pavarde3 = "Petraitis";
  var vardas2 = "Antanas";
  var vardas3 = "Petras"
  console.log("Mano vardas -", vardas1 + " pavarde -",  pavarde1);
  console.log("Mano vardas -", vardas2 + " pavarde -", pavarde2);
  console.log("mano vardas -", vardas3 + " pavarde -", pavarde3);

}

printVardasPavarde();

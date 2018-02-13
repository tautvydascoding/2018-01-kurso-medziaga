console.log(" Labas ");


//

// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {vardas: "Jonas", pavarde: "Jonaitis", klase: "8 klase"};
var pazymiai = [6, 5, 9 , 10, 8];

console.log(mokinys.vardas);
console.log(mokinys.pavarde);
console.log(mokinys.klase);
console.log(mokinys.vardas, mokinys.pavarde, mokinys.klase + "pazymiai:" , pazymiai);

// 2 uzduotis: sukurti 2 objektus:
var tevas = {vardas: "Petras", pavarde: "Petraitis", vaikas: "Antanas"};
var vaikas = {klase: "5 klase", vardas: "Antanas"};
tevas.vaikas = vaikas;
console.log(tevas);

// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika


// --------------konstruktorius---------------------
function Darbuotojas(numeris,vardas, pavarde, alga,) {
this.numeris = numeris;
this.vardas = vardas;
this.pavarde = pavarde
this.alga = alga;

}

//  objekto kurimas

var sekretore = new Darbuotojas(12,"Marija", "Marijaite", 480 );
var pavaduotojas = new Darbuotojas(33, "Kestas", "Kestaitis", 520);
var vadovas = new Darbuotojas(1, "Juozas", "Juozaitis", 600);
console.log(sekretore, pavaduotojas, vadovas);
//  naudoti konstruktoriu prilyginant objektus.

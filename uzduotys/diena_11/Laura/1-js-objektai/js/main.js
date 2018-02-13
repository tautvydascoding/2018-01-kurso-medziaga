console.log(" Labas ");



// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)


var mokinys = {
    vardas : "Tomas",
    pavarde : "Tomaitis",
    kelintokas : 10,
    pazymiai : [6, 5, 9 , 10, 8]
}
console.log( mokinys);
/// ARBA
console.log( mokinys.vardas, mokinys.pavarde, mokinys.kelintokas, mokinys.pazymiai);
//1.1 atspauzdinti visus duomenis


// 2 uzduotis: sukurti 2 objektus:
var tevas = {
    vardas : "Jonas",
     pavarde : "Jonaitis",
     vaikas : "Juozas",
 }

var vaikas =  {
    klase : 10,
    vardas : "Juozas",
}

console.log( tevas);
console.log( vaikas);

// 3) priskirti tevo objekui (kintamajam) vaika. (Prideti informacijos)
tevas.vaikas = vaikas;
console.log( "Pilna info", tevas);


//////////////PAVYZDIAI
var objektas = {
    adresas : "Kaunas",
    nr: 14,
}
console.log( objektas);

/// PRIDETI,    papildomos informacijos
objektas.spalva = "red";
console.log("Su spalva", objektas);

objektas.aukstis = 100;
console.log("Aukstis", objektas);

///PAIIMTI INFO,   issimti reikalinga
var namoNr = objektas.nr;
console.log("Namo nr", namoNr);

var namoAdresas = objektas.adresas;
console.log("Namo adresas", namoAdresas);

/// PAKEISTI INFO,    pagrindineje informacijoje
objektas.nr = 150;
console.log("Pakeistas nr", objektas);
////////////////


//KONSTRUKTORIUS

function Darbuotojas( nr, vardas, pavarde, alga) {
    this.numeris = nr;
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.sallry = alga;
}
///objekto kurimas
var sekretore = new Darbuotojas(99, "Marija", "Marijaitaite", 480);
var pavaduotojas = new Darbuotojas(33, "Kestas", "Kestaitis", 520);
var vadovas = new Darbuotojas(1, "Petras", "Petraitis", 1000);

console.log( "Visi:", sekretore, pavaduotojas, vadovas);



///!!!! BLOOGAS BUDAS, reikia kurti su konstrukturiumi
sekretore = vadovas;
sekretore.vardas = "Marija";

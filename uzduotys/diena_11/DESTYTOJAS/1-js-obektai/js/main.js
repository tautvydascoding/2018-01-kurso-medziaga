console.log(" Labas ");


//

// 1 UZDUOTIS:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
var mokinys = {
    vardas: "Tomas",
    pavarde: "Tomukas",
    kelintokas: 8,
    pazymiai: [6, 5, 9 , 10, 8]
}
// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log( mokinys );
console.log( mokinys.pavarde, mokinys.kelintokas);


// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika
var tetis = {
         vardas : "Kal",
         pavarde: "Drogo",
         vaikas: {}
};
var vaikas = {
        klase: 5,
        vardas: "Mushara"
};
console.log( tetis, vaikas);
tetis.vaikas = vaikas;
console.log(tetis);
//=============construktorius=====
function Darbuotojas(nr, vardas, pavarde, alga) {
    this.numeris = nr;
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.salary = alga;
}

// objekto kurimas
var sekretore = new Darbuotojas(12, "Marija", "Marijaitaite", 480);
var pavaduotojas = new Darbuotojas(33, "Kestas", "kestaitis", 520);
var vadovas = new Darbuotojas(1, "Juozas", "Jokutainis", 600);

console.log(sekretore, pavaduotojas, vadovas);

// !!! blogas budas
sekretore = vadovas;
sekretore.vardas = "Angele";

console.log(sekretore, vadovas);

//

console.log(" Labas ");

// PASIKARTOTI
// js saugosime mokinio informacija:
// 			mokinio: vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// Uzdavinys:
// 1) isvesti i console mokinio informacija.
var mokinys1 = {
    vardas : "Petriukas",
    pavarde : "Petrauskas",
    klase : 6,
    matematikosPazymiai : [6, 5, 9 , 10, 8]
}
console.log(mokinys1);
// document.querySelector("h1").innerHTML = mamokinys1.matematikosPazymiai;
//1.1 atspausdinti visus duomenis
// queryselector
// document.write
// 2) pasirasyti funkcija, kuri is duotu 5 pazymiu, grazintu ju vidurki
function vidurkis (pazymiuMasyvas) {
    var apimtis = pazymiuMasyvas.length;
    var suma = 0;
    for (var i = 0; i < apimtis; i++) {
        suma += pazymiuMasyvas[i];
    }
    var vidurkis = suma / apimtis;
    return vidurkis;
}


// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tetis = {
    vardas : "Kal",
    pavarde : "Drogo",
    vaikas : {}
}

var vaikas = {
    klase : 6,
    vardas : "Drake"
}

console.log( tetis, vaikas );
tetis.vaikas = vaikas;
console.log(tetis);

function Darbuotojas(first, pavarde, id, salary) {
    this.vardas = first;
    this.pavarde = pavarde;
    this.numeris = id;
    this.alga = salary;
}

// objekto kurimas
var sekretore = new Darbuotojas("Marija", "Marijonaite", 12, 480);
var pavaduotojas = new Darbuotojas("Juozas", "Juozikas", 2, 560);
var vadovas = new Darbuotojas("Petras", "Petriokas", 1, 680);
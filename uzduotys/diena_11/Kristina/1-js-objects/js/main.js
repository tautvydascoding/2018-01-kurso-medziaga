console.log(" Labas ");

// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = { 
vardas: "Joniukas",
pavarde: "Jonaitis",
klase: 1,
pazymiai : [6, 5, 9 , 10, 8]
};
console.log(mokinys);


// 2 uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika


var tevas = {
	vardas: "Antanas",
	pavarde: "Antanavicius",
	vaikas: {vaikas}
};
// console.log(tevas);
// console.log(tevas.vardas, tevas.pavarde, tevas.vaikas);

var vaikas = {
	klase: 7,
	vardas: "Petriukas"
};
console.log(tevas, vaikas);
tevas.vaikas = vaikas;
console.log(tevas);

// KONSTRUKTORIUS

function Darbuotojas(nr, vardas, pavarde, alga) { // kintamieji; this sulipdo visus vienam objektui
	this.nr = nr;
	this.vardas = vardas;
	this.pavarde = pavarde;
	this.salary = alga;
}
// objekto kurimas

var sekretore = new Darbuotojas(12, "Marija", "Marijataite", 480);
var pavaduotojas = new Darbuotojas(33, "Petras", "Petrauskas", 520);
console.log(sekretore, pavaduotojas);


// nedaryti prilyginimu o su konstruktoriumi
// sekretore = pavaduotojas;
// sekretore.vardas = "Angele";
// console.log(sekretore, pavaduotojas);
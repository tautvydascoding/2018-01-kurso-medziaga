console.log(" Labas ");
//

// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
    vardas: "Petriukas",
    pavarde: "Petrauskas",
    kelintokas: 6,
    matematikosPazymiai: [6, 5, 9, 10, 8 ]
};
console.log(mokinys);
console.log(mokinys.pavarde, mokinys.kelintokas);


// 2 uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
    vardas: "Jonas",
    pavarde: "Jonaitis",
    vaikas: {}
};

var vaikas = {
    klase: 8,
    vardas: "Tomas"
};
console.log(tevas, vaikas);
tevas.vaikas = vaikas;
console.log(tevas);

//construktorius

function Darbuotojas(numeris, vardas, pavarde, alga) {
    this.numeris = numeris;
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.alga = alga;
}
//objekto kurimas
var sekretore = new Darbuotojas(44, "Marija", "Marijaite", 480 );
var pavaduotojas = new Darbuotojas(71, "petras", "Petraitis", 888);
var vadovas = new Darbuotojas(11, "jonas", "jonaitis", 1500);
console.log(sekretore, pavaduotojas, vadovas);

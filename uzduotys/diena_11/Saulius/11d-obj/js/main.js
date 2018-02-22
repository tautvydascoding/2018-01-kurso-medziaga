console.log(" Labas ");

//

// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
var mokinys = {
    vardas: "Tomas",
    pavarde: "Tomatauskas",
    klase: 9,
    matPazymiai: [6, 5, 9, 10, 8]
};
//1.1 Uzdavinys:
//atspauzdinti visus duomenis
document.querySelector('h1').innerHTML = mokinys.vardas + "<br>" + mokinys.pavarde + "<br>" + mokinys.klase + "<br>" + mokinys.matPazymiai; // html nesupranta obj reik nurodyt tiksliai pvz mokinys.vardas mokinys.pavarde ir t.t.
console.log(mokinys);


// 2 uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika
var tevas = {
    vardas: "Tadas",
    pavarde: "Tadauskas",
    vaikas: ""
};
var vaikas = {
    vardas: "Alutis",
    klase: 5
};

tevas.vaikas=vaikas;
console.log(tevas);


//=======================constructorius===============
//objekto kurimas
function darbuotojas(nr, vardas, pavarde, alga) {
    this.numeris = nr;
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.alga = alga;
}
var sekretore = new darbuotojas(55, "Marija", "Serbentiene", 350);
var pavaduotojas = new darbuotojas(25, "Marijonas", "Medis", 600);
var direktorius = new darbuotojas(1, "Majonezas", "Kanopaitis", 10000);
console.log(sekretore, pavaduotojas, direktorius);
// !!! blogas budas
sekretore = direktorius;
sekretore.vardas = "Angele";
console.log(sekretore, direktorius);

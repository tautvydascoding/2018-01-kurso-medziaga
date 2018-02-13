//

// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
    vardas: "Jonas",
    pavarde: "Jonaitis",
    kelintokas: 7,
    mokinioMatematikosPazymiai: [6, 5, 9, 10, 8]
};
console.log(mokinys);


// 2 uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
    vardas: "Jonas",
    pavarde: "Jonaitis",
    vaikas: ""
};
var vaikas = {
    klase: 7,
    vardas: "Jonukas"
};

tevas.vaikas = vaikas;
console.log(tevas);

function darbuotojas(first, last, age, salary) {
    this.firstname = first;
    this.lastname = last;
    this.age = age;
    this.alga = salary;
}

var naujas = new darbuotojas("Petras", "Petraitis", 55, 600);
var naujas1 = new darbuotojas("Petras", "Petraitis", 45, 800);
var naujas2 = new darbuotojas("Petras", "Petraitis", 65, 600);

console.log(naujas);
console.log(naujas1);
console.log(naujas2);

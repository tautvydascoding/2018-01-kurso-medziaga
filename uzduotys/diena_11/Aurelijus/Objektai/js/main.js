console.log(" Labas ");
// 1 Uzdavinys:
// sukurti mokinio obbjekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
var mokinys = {
    vardas : "Jonukas",
    pavarde: "Jonavicius",
    kelintokas: "desimtokas",
    pazymiai: [6, 5, 9, 10, 8]
};

console.log("Objekto pilnas isvedimas: ",mokinys);
document.write("Dalinis objekto isvedimas ",mokinys.pazymiai);

// document.querySelector.innerHtml(mokinioObjektas);

// 2 uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika
var tevas = {vardas: "Antanas", pavarde:"Antanovicius", vaikas:{}};
var vaikas= {klase: 10, vardas:"Jonukas"};

console.log(tevas,vaikas);
tevas.vaikas = vaikas;
console.log("Tevo objektas: ",tevas);

//Konstruktorius
function Darbuotojas(vardas, pavarde, alga, numeris){
    this.vardas = vardas;  //teviniam kintmajam this.vardas priskiriama lokali reiksme vardas
    this.pavarde = pavarde;
    this.alga = alga;
    this.numeris = numeris;
}
//objekto kurimas
var Vadybininke = new Darbuotojas("Marija", "Briaunyte", 1500, 1);
var Pavaduotojas = new Darbuotojas("Antanas", "Kaimietis", 1000, 2);

Darbuotojas();
// document.write(Vadybininke); neveiks, nes html nesuprogramuotas taip
console.log(Vadybininke);
console.log(Pavaduotojas);

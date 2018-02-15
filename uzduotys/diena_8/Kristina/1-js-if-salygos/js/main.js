console.log(" Labas ");


//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";
if (vardas1 == vardas2) {
    console.log("vardai vienodi");
} else {
    console.log("vardai yra skirtingi");
}

// B.1)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
        console.log("labas tomai");
}
// B.2)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// if (vardas1==vardas2) {
//     console.log("vardai tikrai vienodi");
// } else if (vardas1 != vardas2) {
//     console.log("vardai tikrai skirtingi");
// } else if (vardas1 == "tomas") { //sito nerodys nes virsuj jau arba skirtingi arba vienodi tai niekad neprieis iki sito ifo!!!
//     console.log("labas tomai"); //kad issprest - kelt i virsu kaip pirma if
// }

vardas1 = "tomas";
if (vardas1 == "tomas") {
    console.log("labas tomai");
} else if (vardas1 == vardas2) {
    console.log("vardai tikrai vienodi");
} else if (vardas1 != vardas2) {
    console.log("vardai tikrai skirtingi");
}

// C)
// Patikrinti ar vardas1 yra "Tomas", IR butinai vardas2  yra "Karolis"

var vardas1 = "tomas";
var vardas2 = "karolis";
if (vardas1 == "tomas" && vardas2 == "jonas") {
    console.log(vardas1);
} else if (vardas1 == "tomas" && vardas2 == "karolis") {
    console.log(vardas1, vardas2);
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

var vardas1 = "tomas";
var vardas2 = "jonas";
if (vardas1 == "tomas" || vardas2 == "karolis") {
    console.log(vardas1, vardas2);
}

// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

// Salygos:

// iki 7 metu
// "Pliusines varles"
//
// nuo 7 iki 14
// "Mini telefonai"
// nuo 14 iki 18
// "new Music App"
//
// nuo 18 iki 24
// "Stok i sauliu sajunga"
//
// nuo 24 iki 65
// "Pensijos kaupimas - zusiregistruok"
// nuo 65
// "kelione i Bristona"
// sunkesne:
// iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

var age = 10;
if (age < 7) {
    console.log("pliusines varles");
} else if (age >= 7 && age <14) {
    console.log("mini telefonai");
} else if (7 < age && age < 14) {
    console.log("mini telefonai");
} else if (14 < age && age < 18) {
    console.log("new music app");
} else if (18 < age && age < 24) {
    console.log("stok i sauliu sajuna");
} else if (24 < age && age < 65) {
    console.log("pensijos kaupimas - uzsiregistruok");
} else if (65 < age) {
    console.log("kelione i birstona");
} else if (age < 7 && 65 < age) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
}

// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

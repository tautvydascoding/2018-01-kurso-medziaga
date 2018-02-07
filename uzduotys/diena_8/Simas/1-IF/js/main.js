// =================if  teorija====================
console.log("Labas");

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
// var vardas1 = "Tomas";
// var vardas2 = "Antanas"

// if (vardas1 == vardas2) {
//     console.log("Vardai sutampa")
// } else {
//     console.log("Vardai skirtingi");
// }

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
// if (vardas1 == "Tomas") {
//     console.log("Sveikas Tomai");
// }
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// if (vardas1 == "Tomas" && vardas2 == "Karolis") {
//     console.log("Vardai atitinka");
// } else {
//     console.log("Vardai neatitinka");
    
// }
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// if (vardas1 == "Tomas" || vardas2 == "Tomas") {
//     console.log("Bent vienas is ju vardu Tomas");
// } else {
//     console.log("Cia nera Tomo");
    
// }

// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

var age = 16;

if (age < 7) {
    console.log("Pliusines varles");
} else if (7 <= age && age < 14) {
    console.log("Mini telefonai");
} else if (14 <= age && age < 18) {
    console.log("new Music App");
} else if (18 <= age && age < 24) {
    console.log("Stok i sauliu sajunga");
} else if (24 <= age && age < 65) {
    console.log("Pensijos kaupimas - zusiregistruok");
} else {
    console.log("kelione i Bristona");
}


if (age < 7 || age > 65) {
    console.log("Sokoladiniai zuikuciai 20% nuolaida");
}
// Salygos:

// iki 7 metu
// "Pliusines varles"
//
// nuo 7 iki 14
// "Mini telefonai"
//
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



// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var vardas = "Paulius";


if (vardas == "Tomas") {
    console.log("Masinoms 10% nuolaida");
} else if (vardas == "Paulius") {
    console.log("Buitinei technikai  30% nuolaida");
} else if (vardas == "Airidas") {
    console.log("5% nuolaida kelionems");
}


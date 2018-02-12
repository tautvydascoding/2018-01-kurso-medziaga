console.log(" Labas ");

// var vardas1 = "Tomas";
// var vardas2 = "Karolis";
//
// if(vardas1 == "Tomas" && vardas2 == "Karolis"){     //Svarbiausia salyga pirmiau
//     //console.log("Sveikas ", vardas1);
//     document.write("Sveikas Tomai ir Karoli");
// }
// else if(vardas1 == "Tomas" || vardas2 =="Karolis"){
//     console.log("Pirmas vardai : ", vardas1," , antras vardas: ", vardas2 );
// }
// else {
//     console.log("Vardai netinkami: ", vardas1, " , ", vardas2);
// }

// =================if  teorija====================

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

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta
// var vardas1 = "Tomas";
// var vardas2 = "Karolis";
var age = 18;
//while (age <0 && age>85){
if(age > 0 && age < 7)   {
     document.write("Pliusines varles");
    }
else if(age >= 7 && age < 14){
    document.write("Mini telefonai");
    }
else if(age >= 14 && age<18){
    document.write("Nauja musikine aplikacija");
    }
else if(age >= 18 && age<24){
     document.write("Stok i Sauliu sajunga");
    }
else if(age >= 24 && age<65){
     document.write("Pensijos kaupimas");
    }
//}


/*
if(vardas1 == "Tomas" && vardas2 == "Karolis"){     //Svarbiausia salyga pirmiau
    //console.log("Sveikas ", vardas1);
    document.write("Sveikas Tomai ir Karoli");
}
else if(vardas1 == "Tomas" || vardas2 =="Karolis"){
    console.log("Pirmas vardai : ", vardas1," , antras vardas: ", vardas2 );
}
else {
    console.log("Vardai nesutampa: ", vardas1, " , ", vardas2);
}*/
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

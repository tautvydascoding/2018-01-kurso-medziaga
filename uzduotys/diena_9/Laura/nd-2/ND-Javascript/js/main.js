console.log(" Labas ");


// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)


// // A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// // B) su js paimti jo auksti ir atspausdinti
document.querySelector("h1").style.height = "1000px"; //aukscio nustatymas

var aukstis = document.querySelector('h1').offsetHeight;
console.log( aukstis);

// // C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?
// Ne.


// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/
//


// ///////////////////////////////////////////////
// pasikartoti IF
//
// sukurti js zaidima, popierius , akmuo, zirkles :
// https://www.codecademy.com/courses/javascript-beginner-en-Bthev-mskY8/0/1
//
//
// // pasikartoti antradieni
// // parasyti f-ja "getPelnas(pajamos, mokesciai, mokesciai2)", kuri apskaiciuoja pelna is  paduotu pajamu atimdama paduotus mokescius, ir poto vel atimdama mokescius2
// // pajamos 1500, mokesciai 2.5%, mokesciai2  1.5%

// (( function getPelnas(pajamos, mokesciai, mokesciai2) {
// var pajamos = 1500 ;
// var mokesciai = 2.5% ;
// var mokesciai2 = 1.5%
// console.log("Likes pelnas:", (1500 / 100 * 2.5);
// }
// getPelnas(pajamos, mokesciai, mokesciai2)   )))

//
// // pasikartoti IF
// // sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// // kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// // kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// // kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
//

var vardas = "Airidas";
var vardas2 = "Antanas";

    if (vardas == "Tomas") {
        console.log("Masinoms 10% nuolaida");
    }
    else if (vardas == "Paulius") {
        console.log("Buitinei technikai  30% nuolaida");
    }
    else if (vardas == "Airidas"){
        console.log("5% nuolaida kelionems");
    }


// // itvirtinti f-jas
//
// // UZDUOTIS
// // A) sukurti kintamaji "vardas" Tomas
/////////////
var vardas = "Tomas";

function getVardas1() {
    return vardas + "1";
}
var x = getVardas1();
console.log( x);

//////////
function getVardas3() {
    return vardas + "3";
}
var x = getVardas3();
console.log( x);

//////
function setVardas2(name) {
    vardas = name + "2";
}
 setVardas2("Antanas");

////////
function getVardas3(){
    return vardas + "3";
}
var x = getVardas3();
console.log( x);
// // B) sukurti 50 f-ju.
// // nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// // nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// // lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// // lygines f-jos turi pakeisti varda ir uzdeti skiaciu salia
// // NOTE: visas f-jas iskviesti
// // pvz.:
// var vardas = "Tomas";
// // 1
// function getVardas1() {
//   return vardas + "1";
// }
// var x = getVardas1();   // arba  console.log(  getVardas1() );
// console.log(  x );
//
// // 2
// function setVardas2(name) {
//    vardas = name + "2";
// }
// setVardas2("antanas"); // sugalvoti vis kita zodi
//
// // 3
// function getVardas3() {
//   return vardas + "3";
// }
// x =  getVardas3();  // arba  console.log(  getVardas3() );
// console.log(  x );
//
// // 4
// function setVardas4(name) {
//    vardas = name + "4";
// }
// setVardas2("juozas"); // sugalvoti vis kita zodi
//
// // 5
// ....
// ...
// ...

//////////////////////////////////////////// 9 DIENA:
// sukurti masyva:
var vardai = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];
console.log("Vardai:", vardai);

// ) sunaikinti pirma STALCIU VISA
delete vardai[1];
console.log("Nauji vardai:", vardai);

// ) tarp Petras ir Povilas, iterpti Marija
vardai.splice(2, 0, "Marija");
console.log("Su Marija", vardai);

// ) surikiuoti Masyvai

vardai.sort();
console.log("Surikiuoti", vardai);


// ) sunaikinti Marijos stalciu
delete vardai[3];
console.log("Be MArijos", vardai);

// // ) sukeisti vietomis pirma ir penkta stalciu
var x = vardai[1];
vardai[1] = vardai[5];
vardai[5] = x;
console.log( vardai);


// ) sukurti masyvo kojipa
// SU SLICE komanda
 console.log("orginalas", vardai);

var tikraKopija = vardai.slice(0);  // "0" - nuo kurio kopijuoti NOTE: nepamirsti issisaugoti kopija i kintamaji
console.log( " tikra kopija",  tikraKopija);



// ) kopijos masyve istrinti nuo 2 iki 4

var tikraKopija = vardai.slice(3, 5);
console.log( tikraKopija);

// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
// ) prijungti kopijos masyva prie orginalo masyvos galo



// 6. sukurti su masyvus (skirtingus)
var asmenys = [];
var vardai = ["Tomas", "Marius", "Jurgis", "Petras"]
var pavardes = ["Tomaitis", "Marijus", "Jurgaitis", "Petraitis"]


for (var i = 0; i < vardai.length; i++) {
    if (vardai[i] == pavardes;
        console.log( );

}
// for (var i = 0; i < 10; i++) {
//
// var y = vardai + pavardes;
// console.log( y);
// }



// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
//((var m1="a", "b","c"))
//var m2=["#","@","$"]
//m3=a #  b@ c $
//var m3= [];
//for (var i = 0; i<3, i++) {
//m3[i] = m1[i];
//m3[i++]=m2[i];




// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai



//////////////////////

///isvedimas i ekrana
document.querySelector ('h1').innerHTML = "<b> Azuolas </b>"


for (var i = 0; i < 20; i++) {
    var y = y + "#";
    console.log( y);
}

///////////
var mas = [];
var x = document.querySelector ('section');
console.log( x );
x.innerHTML = "<h2> Azuolas</h2>";

for (var i = 0; i < 50; i++) {
    x.innerHTML += "<h2> Azuolas</h2>";
}
////////
for (var i = 0; i < 50; i++) {
    var senas = "#" + i;
    console.log( senas);
}
///////////
//pakeicia kas ANTRA
for (var i = 0; i < 50; i++) {    // i = i + 2
    i++;                    //padidina vienetu
    mas[i] = 3;
}
console.log( mas);

//pakeicia kas penkta
for (var i = 0; i < 50; i = i + 5) {
    mas[i] = 9;
}
console.log( mas);

///////
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

ieskomiZmones = [2, 16, 17, 18, 19, 25];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkesne - surasti visus riko)
 var x = names.indexOf("Rico");
 console.log( "numeris:" + x);

 for (var i = 0; i < names.length; i++) {
     names[i] == "Rico";
     console.log( names);
 }

 ///////////////

 function getStalciausNumeris( ieskomasTekstas) {  //ieskomasTekstas - lokalus

 var numeris = lastNames.indexOf(ieskomasTekstas);
     return numeris;
 }

 var nr = getStalciausNumeris("Gates");
 console.log("ieskomas numeris", nr);
 nr = getStalciausNumeris("Piper");    //kai neranda, grazinamas "1";
 console.log("ieskomas numeris", nr);

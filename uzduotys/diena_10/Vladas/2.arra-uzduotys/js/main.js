console.log(" Labas ");

// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat();   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"

// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// function findNumeri(x){
//     var numeris = names.indexOf("Joy");
//     return numeris;
// }
// findNumeri(numeris);
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var ilgis = names.length;
for (var i = 0; i < ilgis; i++) {       //arba for (var i = 0; i < names.length; i++)
    if (names[i] == "Freida");      // arba  var vardas = names[i];
        var pavarde = lastNames[i];
        break;
}
console.log(pavarde);

// 4) rasti visu zmoniu vardu "Rico" pavardes
var pavar = "Piper";
for (var i = 0; i < names.length; i++) {
    if (names[i] == pavar) {
        var pavarde = lastNames[i];
        console.log(" pavarde " + pavarde);
    }
}
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

var ieskomiZmones = [2, 16, 17, 18, 19, 25];
    for (var i = 0; i < ieskomiZmones.length; i++) {
        var ieskomasNumeris = ieskomiZmones[i];
        var vardas = names[ieskomasNumeris];
        var pavardes = lastNames[ieskomasNumeris];
        console.log(" vardas pavarde " + vardas, pavardes);


    }




var a = Math.random(); // 0 - 1
if ( a <= 0.1) {
    console.log("laimejai");
}

ieskomiZmones = [2, 16, 17, 18, 19, 25];





    var a = names.indexOf("Rico");   // indexOff iesko stalciaus numeri
    console.log("stalcius", a);

    var arRadau = 0;  //false  "neardau"
for (var i = 0; i < names.length; i++) {        // grazina saraso ilgi
    if (names[i] == "Rico") {
        arRadau = 1;
        console.log("radau. Jo stalcius " + i);
     }
}
if (arRadau === 0) {
    console.log("neradau");

}

function findNumeri(x) {
    for (var i = 0; i < names.length; i++) {
        names[i] = names.indexOf(x);
        console.log();
    }
}
findNumeri("Rico");

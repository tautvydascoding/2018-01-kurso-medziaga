// var ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat();   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========





// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// var x = names.indexOf("Rico"); // indexOf - surranda stalciaus numeri
// console.log("numeris" + x);

var arRadau = 0; // arba false arba pvz "neradau"
for (var i = 0; i < names.length; i++) { //names.length - grazinau masyvo ilgi. foras praeina visa masyva
            if (names[i] == "Rico") { // i tam kad tikrinti visus stalcius i= 0,1,2,3....
                console.log("Radau, jo stalcius" + i);
                arRadau++; // jei randa rico del ++ pakyla ar radau reiksme todel sekantis ifas nebelygus 0 ir vykdomas elsas radau
        }
    }
    if (arRadau == 0) {
        console.log("Neradau");
    }  else {
        console.log("Radau");

    }




// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
function rastiVarda(nr) {
    for (var i = 0; i < names.length; i++) {
        if (names[i] == nr) {
            return nr == i;
        }
    }
}
var nr = rastiVarda("Regan");
console.log("numeris:" + nr);
nr = rastiVarda("Lewis");
console.log("numeris:" + nr);
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
function pirmoPavarde(b) {
    var n = names.indexOf(b);
    // console.log(n);
    var l = lastNames[n];
    console.log(b + " " + l);

}
var b = pirmoPavarde("Freida");


//trumpesnis budas

var ilgis = names.length;
for (var i = 0; i < ilgis; i++) {
    var vardas = names[i];
    if (vardas == "Freida") {
        var pavarde = lastNames[i];
        // break; // nutraukia VIENO for ciklo darba
    }
}
console.log(pavarde);



// 4) rasti visu zmoniu vardu "Rico" pavardes
var ieskomasvardas = "Rico";
for (var i = 0; i < names.length; i++) {
    // ar i-tasis vardas yra rico
    if (names[i] == ieskomasvardas) {
        var pavarde = lastNames[i];
        console.log("Rico pavarde yra " + pavarde);
    }
}


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
console.log("----");
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++) {
    var ieskomasnumeris = ieskomiZmones[i];
    var vardas = names[ieskomasnumeris];
    var pavarde = lastNames[ieskomasnumeris];
    console.log(vardas + pavarde);
}




var a = Math.random(); // 0 - 1
if ( a <= 0.1) {
    console.log("laimejai");
}

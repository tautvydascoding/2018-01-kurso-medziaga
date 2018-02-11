console.log(" Labas ");
console.log("labas");

// =================taisyklingas Array copy  =================
// // NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat();   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

// suranda pirma
// var x = names.indexOf("Rico"); gretesnis budas, bet ne visada veikia
// for (var i = 0; i < names.length; i++) {
//     if (names[i] == "Rico") {
//         console.log("Pirma Rico vieta:", i);
//         break; // nutraukia for nes rado pirma "Rico"
//     }
// }

//suranda visu
// var neradau = 0;
// for (var i = 0; i < names.length; i++) {
//     if (names[i] == "Rico") {
//         console.log("Visos Rico vietos:", i);
//         neradau++;
//     }
// }

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// if (neradau === 0 ) {
//     console.log("Neradau")
// } else {
//     console.log("Rico yra " + neradau + " vietose")
// }
// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina

function rastiVarda(masyvas, vardas) {
    for (var i = 0; masyvas.length; i++) {
        if (masyvas[i] == vardas) {
            return (vardas + " yra " + i + " stalciuje");
        } 
    }
}

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var ilgis = names.length; //gauname masyvo ilgi
var ieskomasVardas = "Freida";//stengtis nieko hardcodinti ir viska rasyti su reiksmemis
for (var i = 0; i < ilgis; i++) {
    var vardas = names[i];
    if (vardas == ieskomasVardas) {
        console.log("Freidos pavarde yra: " + lastNames[i]);
        break; // reikia break kad surasti tik pirma
    }
}
// 4) rasti visu zmoniu vardu "Rico" pavardes
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        console.log(lastNames[i]);
    }
}
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
var ieskomiZmones = [2, 16, 17, 18, 19, 25];

// for (var i = 0; i < ieskomiZmones.length; i++) {
//     console.log("Vardas: " + names[ieskomiZmones[i]] + " Pavarde: " + lastNames[ieskomiZmones[i]]);
    
// }
for (var i = 0; i < ieskomiZmones.length; i++) {
    var tmp = ieskomiZmones[i];
    console.log("Vardas: " + names[tmp] + " Pavarde: " + lastNames[tmp]);
    
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena) 

function atiktiniuSkArray (apimtis, minSk, maxSk) {
    var atsitiktineArray = [];
    for (let i = 0; i < apimtis; i++) {
        var atsitiktinisSkaicius = Math.round(Math.random() * (maxSk - minSk) + minSk);
        atsitiktineArray[i] = atsitiktinisSkaicius;
    }
    return atsitiktineArray;
}

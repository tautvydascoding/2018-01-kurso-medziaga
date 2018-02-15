console.log(" Labas ");



// =================taisyklingas Array copy  =================
// // NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat();   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========




// UZDUOTIS
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

ieskomiZmones = [2, 16, 17, 18, 19, 25];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkesne - surasti visus riko)
 var x = names.indexOf("Rico");
 console.log( "numeris:" + x);

//ARBA
var arRadau = 0;   // false "neradau"
for (var i = 0; i < names.length; i++) {    //suranda VISUS RICO.. //names.length - grazina masyvo ilgi.
    if (names[i]== "Rico"){                //i=0, 1, 2,...iki lenght.
        arRadau = 1;
        console.log("Radau. Jo stalcius" + i);
    }
}


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
var arRadau = 0;   // false "neradau"
for (var i = 0; i < names.length; i++) {    //suranda VISUS RICO.. //names.length - grazina masyvo ilgi.
    if (names[i]== "Rico"){                //i=0, 1, 2,...iki lenght.
        arRadau = 1;
        console.log("Radau. Jo stalcius" + i);
    }
}
//tikriname ar radome
if (arRadau === 0) {
    console.log("Nepavyko rasti");
}


// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// uzduots:----------------------------


//////////// SVARBUS///////////////
function getStalciausNumeris( ieskomasTekstas) {  //ieskomasTekstas - lokalus

var numeris = names.indexOf(ieskomasTekstas);
    return numeris;
}

    ///ARBA
// for (var i = 0; i <names.lenght; i++) {
/// console.log( ieskomasTekstas);
// console.log( names [i] );

// console.log(" ieskau")
//      if ( ieskomasTekstas == names [i]) {
//          console.log("radau");
//          return i;


var nr = getStalciausNumeris("Rico");
console.log("ieskomas numeris", nr);
nr = getStalciausNumeris("Jonas");    //kai neranda, grazinamas "1";
console.log("ieskomas numeris", nr);
//////////////////SVARBUS//////////////


// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

var vardoNumeris = getStalciausNumeris("Freida");
var pavarde = lastNames[vardoNumeris];
console.log(pavarde);

/////////// ARBA
var ilgis = names.lenght;           //gauname masyvo ilgi
 for (var i = 0; i < ilgis; i++) {
     var vardas = names[i];
     if ( vardas == "Freida"){
         var pavarde = lastNames[i];       // vardo vieta radome,jinai i. tada lAST NAME vieta irgi i.
         break;                  // break - zodis nutraukia Viena FOR Cikla.
     }
 }
 console.log( "pavarde", pavarde);


// 4) rasti visu zmoniu vardu "Rico" pavardes.

// einu per visa vardu masyva;
for (var i = 0; i < names.length; i++) {
    // ar i-tasis vardas "Rico"
    if (names[i] == "Rico"){
        var pavarde = lastNames[i];
        console.log( "Rico pavarde yra" + pavarde);
    }
}
/////////////ARBA advace.pradzioje sita irasyti, poto pakeisti funkcijoje.
// var ieskomasVardas = "Rico";


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
//
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++) {      //pirma begame per visus vardus;
    var ieskomasNumeris = ieskomiZmones[i];
    var vardas = names[ieskomasNumeris];
    var pavarde = lastNames[ieskomasNumeris];
    console.log("Ieskoto zmogaus pavarde:" + vardas + " " + pavarde);        //
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
//
// ieskomiZmones = [2, 16, 17, 18, 19, 25];
//

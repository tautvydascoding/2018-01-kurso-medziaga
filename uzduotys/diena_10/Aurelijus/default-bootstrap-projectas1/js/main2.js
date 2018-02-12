console.log("labas");

// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat();   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// // ================= ========= ======== ========
// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"



var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna",
"Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora",
"Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena",
 "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika",
  "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware",
"Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney",
"Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond",
 "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson",
  "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// var x = names.indexOf("Rico");
// console.log("Suradimas su indexOf ",x); //tik pavyzdys, bet ne cia reikiamas sprendimo budas
//
// var rasti = 0;
// for( i = 0; i<names.length; i++){
//     if(names[i] == "Ric"){
//         rasti++;            //jeigu radom, pakeiciam susikurto kintamojo reiksme
//         console.log(i);
//     }
// }
// if(rasti >0){
//     console.log("Pavyko rasti");{}
// } else {
//     console.log("Nepavyko rasti", rasti);
// }


//Tas pat tik funkcijoje
function varduIeskojims(ieskomasTekstas){
    rastiFunkcijoj = 0;
    for(  i=0; i<names.length; i++){
        if(names[i] == ieskomasTekstas){
            rastiFunkcijoj++;
            console.log("Jusu ieskomas vardas ",ieskomasTekstas);
        }
    }
    if(rastiFunkcijoj == 0){
        console.log("Tokio vardo nera");
    }
    return ieskomasTekstas;
}
//document.write(varduIeskojims("Rico"));

// uzduotis:--------------------------

// uzduots:----------------------------

// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina

var number = 0;
function ieskomiZmones(ieskomasTekstas){
for(var i = 0 ; i< names.length; i++){
// console.log(ieskomasTekstas);
    // console.log(names[i]);
// var numeris= names.indexOf(number);
//return numeris;
    // console.log("ieskau");
    if(ieskomasTekstas == names[i]){
        console.log("RADAU");
        return i;
        }
    }
}
var nr = ieskomiZmones("Rico");
console.log("ieskomi zmones: ", nr);
nr = ieskomiZmones("Freida");
console.log("ieskomi zmones: ", nr);

// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)


    for(var i = 0; i< names.length; i++){
        var vardas = names[i];
        if(vardas == "Freida"){
            var pavarde = lastNames[i];
            break;  //nutraukia viena for cikla
        }
    }
console.log(vardas, " <-vardas, pavarde -> ",pavarde);
document.write(vardas, " <-vardas, pavarde -> ",pavarde);

// 4) rasti visu zmoniu vardu "Rico" pavardes
function pavardziuPaieska(){
var ieskomasVardas= "Rico";                   //reikia stengtis nieko nehardcodint
for (var i = 0; i < names.length; i++) {    //einam per vardu masyva
    if(names[i] == ieskomasVardas){
        console.log(ieskomasVardas, " pavarde: ", lastNames[i]);
    }
    }
}
pavardziuPaieska();

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
//ieskomiZmones = [2, 16, 17, 18, 19, 25];
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
function VardasPavarde(){
    for(var i=0; i< ieskomiZmones.length; i++){
            var ieskomoZmogausNumeris = ieskomiZmones[i];
            var vardas = names[ieskomoZmogausNumeris];
            var pavarde = lastNames[ieskomoZmogausNumeris];
            console.log("ieskomo zmogaus vardas", names[ieskomoZmogausNumeris], " pavarde ",lastNames[ieskomoZmogausNumeris]);
    }
}
VardasPavarde();

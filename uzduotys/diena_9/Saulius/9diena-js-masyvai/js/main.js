console.log(" Labas ");

// var cars = []; // sukurs tuscia masyva
//var cars = ["Audi", "BMW", "Saab", "Opel"]; // sukurs uzpildyta masyva
//   stalciai|  0   |   1  |   2   |   3   |
//cars[2] = "BMW"; // sunaikina antra stalciu (saab) ir pakeicia jo reiksme
//var x = cars[3]; // nuo sios akimirkos x="Opel"

//---------------------------------------------------------

var prekiautojai = [];
prekiautojai[0] = "Maxima";
prekiautojai[1] = "Iki";
prekiautojai[2] = "Norfa";
prekiautojai[3] = "Rimi";
prekiautojai[4] = "Lidl";
prekiautojai[5] = "Turgas";
prekiautojai[50] = "Express market";
console.log("Prekybos centrai:", prekiautojai);

//UZDUOTYS

// A) pervadinti pirma stalciu
prekiautojai[1] = "Mandarinas";
console.log("Prekybos centrai:", prekiautojai);

// B) sukeisti antro ir trecio stalciau reiksmes. !negalima rankomis rasyti stringo (nehardcodinti)
var x = prekiautojai[2];
var y = prekiautojai[3];
prekiautojai[2] = y;
prekiautojai[3] = x;
console.log("Prekybos centrai:", prekiautojai);

var z = prekiautojai[4];
prekiautojai[4] = prekiautojai[5];
prekiautojai[5] = z;
console.log("Prekybos centrai:", prekiautojai);

// C) padaryti uzdaviniui B) f-ja sukeistiMasyvo2Elementus(x, y)
function sukeistiMasyvo2Elementus(x, y) {
    var z = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = z;

}
sukeistiMasyvo2Elementus(1, 4);
console.log("sukeiciam 1 ir 4:", prekiautojai);
sukeistiMasyvo2Elementus(0, 3);
console.log("sukeiciam 0 ir 3:",  prekiautojai);

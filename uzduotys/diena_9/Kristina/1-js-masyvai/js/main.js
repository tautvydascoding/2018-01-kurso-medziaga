console.log(" Labas ");

// var prekiautojai = []; // tuscias masyvas
//
// prekiautojai[0] = "maxima";
// prekiautojai[1] = "iki";
// prekiautojai[2] = "rimi";
// prekiautojai[3] = "lidl";
// prekiautojai[50] = "cia market";
// console.log("prekybos centrai", prekiautojai);

// uzduotis
// pervadinti pirma prekybos centra

// var prekiautojai = []; // tuscias masyvas
//
// prekiautojai[0] = "maxima";
// prekiautojai[1] = "iki";
// prekiautojai[2] = "rimi";
// prekiautojai[3] = "lidl";
// prekiautojai[50] = "cia market";
// prekiautojai[0] = "centukas";
// console.log("prekybos centrai", prekiautojai);

// b) sukeisti antro ir trecio stalciu reiksmes

var prekiautojai = []; // tuscias masyvas ! negalima rankomis rasyti stringo

// 1
prekiautojai[0] = "maxima";
prekiautojai[1] = "iki";
prekiautojai[2] = "rimi";
prekiautojai[3] = "lidl";
prekiautojai[50] = "cia market";
// console.log("prekybos centrai", prekiautojai);

// 1
// var x = prekiautojai[2];
// var y = prekiautojai[3];
// prekiautojai[2] = y;
// prekiautojai[3] = x;
// console.log("prekybos centrai", prekiautojai);

// // 2
// var x = prekiautojai[3] ;
// prekiautojai[3] = prekiautojai[2];
// prekiautojai[2] = x;
// console.log("prekybos centrai", prekiautojai);

//2.1
// var x = prekiautojai[3];
// prekiautojai [3] = prekiautojai[50] ;
// prekiautojai[50] = x;
// console.log("prekybos centrai", prekiautojai);

//3 padaryti B uzdaviniui f-ija sukeistiMasyvus2elementus(x,y) // tada galima keisti auto visur apacioj skliaustuose jei palieki f-jos viduj x ir y
// function sukeistiMasyvus2elementus(x,y) {
//     var x = prekiautojai[3];
//     prekiautojai[3] = prekiautojai[2];
//     prekiautojai[2] = x;
// }
// sukeistiMasyvus2elementus(3, 2);
// console.log("prekybos centrai", prekiautojai);

function sukeistiMasyvus2elementus(x,y) {
    var z = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = z;
}
sukeistiMasyvus2elementus(1, 4);
console.log("sukeiciam 1 ir 4", prekiautojai);
sukeistiMasyvus2elementus(0, 4);
console.log("sukeiciam 0 ir 4", prekiautojai);

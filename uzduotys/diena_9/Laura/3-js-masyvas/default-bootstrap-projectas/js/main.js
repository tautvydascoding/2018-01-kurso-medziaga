console.log(" Labas ");


// // uzduotis  Array

// // 1. i masyvo gala ideti elmenta “butelis vandens”
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
keliautojas.push("butelis vandens");
console.log( keliautojas.toString());

// // 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
keliautojas.unshift("ziebtuvelis");
console.log( keliautojas.toString());

// // 3. istrinti 3-cia elmenta
keliautojas.splice(3, 1)
console.log( keliautojas.toString());

// // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var naujas = [];                   //sukurti nauja MASYVA
for (var i = 0; i < 50; i++) {
  naujas[i] = 0;                   // i lygu 0,poto 1,2,3... i vis dideja.
}
console.log( naujas);                    //astpausti viska


/// PAVYZDYS

for (var i = 0; i < 50; i++) {
var tekstas = "testuoju" + i;
console.log( tekstas);
}

for (var i = 0; i < 50; i++) {
    var senas = "#" + i;
    console.log( senas);
}
////////////////

// // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var mas = [];
for (var i = 0; i < 50; i++) {
    mas [i] = 1;
}
console.log( mas);

// // 5.2: kas antra ^ masyvo elementa pakeisti i "3". [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < 50; i++) {    // i = i + 2
    i++;                    //padidina vienetu
    mas[i] = 3;
}
console.log( mas);

//////////



// // 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9". [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i < 50; i = i + 5) {
    mas[i] = 9;
}
console.log( mas);

////

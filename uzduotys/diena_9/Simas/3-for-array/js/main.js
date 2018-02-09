// console.log(" Labas ");

// -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// console.log(names);
 
// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta “butelis vandens”
keliautojas.push("butelis vandens")
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
keliautojas.unshift("ziebtuvelis");
// 3. istrinti 3-cia elmenta
keliautojas.splice(2, 1);
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
var tuscias = [];
for (i = 0; i < 50; i++) {
    tuscias[i] = "0";
}

var tuscias99 = [];
for (c = 0; c < 50; c++) {
    tuscias99.splice(c, 0, "0");
}

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var tuscias2 = [];
var j = 0;
while (j < 50) {
    tuscias2[i] = "1";
    j++;
}
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
var tuscias3 = [];
for (i = 0; i < 50; i++) {
    if (i % 2 === 0) {
        tuscias3[i] = "1";
    } else {
        tuscias3[i] = "3";
    }
}
//su while
var tuscias5 = [];
var z = 0;
while (z < 50) {
    if (z % 2 === 0) {
        tuscias5[z] = "1";
    } else {
        tuscias5[z] = "3";
    }
    z++;
}


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
var tuscias4 = [];
for (i = 0; i < 50; i++) {
    if ((i + 1) % 5 === 0 && i !== 0) {
        tuscias4[i] = "9";
    } else if (i % 2 === 0) {
        tuscias4[i] = "1";
    } else {
        tuscias4[i] = "3";
    }
}





//





// -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
//
// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta “butelis vandens”
keliautojas.push("butelis vandens");
console.log(keliautojas);

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

// 3. istrinti 3-cia elmenta
keliautojas.splice(3, 1);
console.log(keliautojas);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];
for (var i = 0; i < 50; i++) {
masyvas[i] = 0;
}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var masyvas2 = [];
for (var i = 0; i < 50; i++) {
masyvas2[i] = 1;
}
console.log(masyvas2);
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < 50; i++) {
// i++; // padidina vienetu
masyvas2[++i] = 3;
//i++; i=i+1;
//++i; i+1=i;
}
console.log(masyvas2);

// kitas budas:
// for (var i = 0; i < 50; i++) {
// tikrinu ar skaicius lyginis (ar padalinus is 2 liekana 0)
//  if (i % 2 === 0) {
//    masyvas2[i] = 3;
// }
// console.log(masyvas2);


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

for (var i = 0; i < 50; i++) {
i=i+4;
masyvas2[i] = 9;
}
console.log(masyvas2);




//

console.log(" Labas ");
// -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
//
// var ilgis = names.length;
// console.log("ilgis", ilgis);
//
//
// var sujungti = names.join("-");
// console.log(sujungti);
//
//
// names.shift();
// console.log(names);
//
//
// names.pop();
// console.log(names);
//
//

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
delete keliautojas[3];
console.log(keliautojas);
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var skaicius = [];
for (var i = 0; i < 50; i++) {
    skaicius[i] = 0;
}
console.log("skaicius", skaicius);
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var vienas = [];
for (var i = 0; i < 50; i++) {
    vienas[i] = 1;

}

console.log("Skaicius", vienas);
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (var i = 0; i < 50; i++) {
    // i++;
    vienas[++i] = 3;  //i++ arba ++i/--i   i--
}

console.log("Skaicius", vienas);
//arba

for (var i = 0; i < 50; i++) {
    //tikrinam su if ar skaicius lyginis( nelieka liekanos)
    if (i % 2 === 0 ){
        vienas[i] = 3;
    }

}

console.log("Skaicius", vienas);


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....






//

var prekiautojai = []; //tuscias masyvas
 prekiautojai[0] = "Maxima";
 prekiautojai[1] = "Iki";
 prekiautojai[2] = "Rimi";
 prekiautojai[3] = "Express";
 prekiautojai[50] = "Cia market";

 console.log("Prekybos centrai ", prekiautojai);

// p
prekiautojai[1] = "Lidl";

console.log("Prekybos centrai ", prekiautojai);

//sukeisti antra ir trecia stalcius (iki su rimi), negalima rankomis rasyti stringu
var x = prekiautojai[2]; //iki
prekiautojai[2] = prekiautojai[3]; //rimi
prekiautojai[3] = x;

console.log("Prekybos centrai ", prekiautojai);


function masyvoelementukeitimas (a,b) {
    if (a >= 0 && b >= 0 && a != b) {
    var x = prekiautojai[a]; //
    prekiautojai[a] = prekiautojai[b]; //rimi
    prekiautojai[b] = x;
    }

}
masyvoelementukeitimas(0, 3);
console.log("Prekybos centrai ", prekiautojai);

//koks masyvo ilgis

var phones = ["iPhone", "Nokia", "Samsung", "Alcatel"];
var z = phones.length;
console.log(z);

//istrinti paskutini elementa
phones.pop();
console.log(phones.join(" :"));
//ideti elemta po paskutinio elemento
phones.push("Motorola");
phones.push("CAT");
phones.push("One Plus");
console.log(phones);

//istrinti is masyvo priekio
phones.shift();
console.log(phones);

//irasyti i masyvo priekio
phones.unshift("Motorola");
phones.unshift("CAT");
phones.unshift("One Plus");
console.log(phones.join(";;"));


// // -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
//
// .length
// .join()
// .shift()
// .pop()
//
//
//
// // =========================================================
// // uzduotis  Array
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

keliautojas.push("butelis vandens");
keliautojas.unshift("ziebtuvelis");
keliautojas.splice(2,1);

console.log("Array: ", keliautojas.join(" "));






// // 1. i masyvo gala ideti elmenta “butelis vandens”
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
// 3. istrinti 3-cia elmenta
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
var ilgumo = [];
for (var i = 0; i < 50; i++) {
    ilgumo[i] = 0;
}
console.log("50 ilgio masyvas: ", ilgumo.join(" "));

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var whileMas = [];
var a = 0;
while (a < 50) {
    whileMas[a] = 1;
    a++;
}
console.log("While masyvo kurimas", whileMas.join(" "));
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

var ilgMas = [];
for (var i = 1; i < 50; i++) {
    if (i % 5 == 0 && i != 0) {
        ilgMas[i] = 9;
    } else if (i % 2 == 0 && i != 0) {
        ilgMas[i] = 3;
    } else {
        ilgMas[i] = 1;
    }
}
console.log("50 ilgio masyvas: ", ilgMas.join(" "));

var ilgMass = [];
while (i < 50) {
    if (i % 5 == 0 && i != 0) {
        ilgMass[i] = 9;
    } else if (i % 2 == 0 && i != 0) {
        ilgMass[i] = 3;
    } else {
        ilgMass[i] = 1;
    }
 i++;
}
console.log("50 ilgio masyvas: ", ilgMas.join(" "));





//

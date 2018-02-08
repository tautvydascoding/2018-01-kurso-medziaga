console.log(" Labas ");


var phones = ["Nokia", "Iphone", "Motorolla", "Samsung"];
var ilgis = phones.length;
console.log(ilgis);


var tekstas = phones.toString();
console.log(tekstas);
var tekstas2 = phones.join(" "); // skyriklis tarp stalciaus reiksmiu
console.log(tekstas2);

//  delete last element

phones.pop();
console.log(phones.join("; "));

phones.push("Huawei");
console.log(phones.join("; "));

phones.push("Sony");
console.log(phones.join(" - "));

//  istrynimas priekinio masyvo

phones.shift();
console.log(phones.join("...")); //skyriklis

phones.unshift("Tele2");
console.log(phones.join(";; "));

delete phones[2];
console.log(phones.join(","));

phones.splice(2, 1); //istrinsime nuo 2 (ji iskaitant) - o stalciaus 1 -a VISA STALCIU
console.log(phones);

// splice insert - iterpimas
phones.splice(2, 0, "raudonas", "melynas"); // 2 - nuo kur; 0 - kiek istrinti // raudonas iterpiamas
console.log(phones);

// splice replace / trynimas - iterpiamas

phones.splice(5, 1, "Panasonic");
console.log(phones);

// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// console.log(names);

// .length
// .join()
// .shift()
// .pop()

var kopija = phones; //negalima !!!
console.log("originalas", phones);
console.log("Kopija", kopija);

kopija[0] = "sugedo";
console.log("originalas", phones);
console.log("Kopija", kopija);
var tikraKopija = phones.slice(0); // 0 - nuo kurio kopijuoti // nepamirsti issisaugoti
console.log("tikra kopija", tikraKopija);
var tikraKopija = phones.slice(3, 5);
console.log("tikra kopija", tikraKopija);

phones.sort(); // surikiuoja nuo A iki Z, bet netinka skaiciams nes pavercia juos i String
console.log(phones);
phones.push(9);
phones.push(1);
phones.sort(function(a, b) {
  return a - b;
})
// phones = "";
// console.log("originalas", phones);
// console.log("Kopija", kopija);

// cat - keliu masyvu sujungimas


// =========================================================
// uzduotis  Array
// keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// 1. i masyvo gala ideti elmenta “butelis vandens”

keliautojas.push("butelis vandens");
console.log(keliautojas.join(", "));

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
keliautojas.splice(0, 0, "ziebtuvelis");
console.log(keliautojas);

// 3. istrinti 3-cia elmenta
delete keliautojas[3];
console.log(keliautojas.join(",") );

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....






//

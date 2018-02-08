console.log(" Labas ");


// =========================================================
// uzduotis  Array
// keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
var y = [];
var x = [];
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// 1. i masyvo gala ideti elmenta “butelis vandens”

keliautojas.push("butelis vandens");
console.log(keliautojas.join(", "));

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
keliautojas.splice(0, 0, "ziebtuvelis");
console.log(keliautojas);

// 3. istrinti 3-cia elmenta
delete keliautojas[3];
console.log(keliautojas.join(","));

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
for (var i = 0; i < 50; i++) {

  x.push(0);
}

console.log(x);


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

for (var i = 0; i < 50; i++) {

  y.push(1);

}
console.log(y);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 0; i < 50; i++) {

  i++; // padidina reiksme vienetu
  y[i] = 3; // i= i+1 i+1 = i
}
// arba
//  if
// (i % 2===0 );
// y[i]= 3;

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i < 50; i = i + 5) {
  y[i] = 9;
}

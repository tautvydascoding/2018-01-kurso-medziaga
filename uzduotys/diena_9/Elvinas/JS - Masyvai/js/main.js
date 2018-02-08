console.log(" Labas ");


var prekiautojai = []  // empty array
prekiautojai[0]= "IKI"
console.log("prekybos centrai:", prekiautojai);
prekiautojai[1]= "Maxima";
prekiautojai[2]= "Lidl";
prekiautojai[3]= "Rimi";
prekiautojai[50]= "Cia Market";
console.log("prekybos centrai:", prekiautojai);


// uzduotis
// pervadinti pirma stalciu
prekiautojai[1] = "Silas";

// B - sukeisti antro ir trecio stalciaus reiksmes vietomis, negalima rasyti rankomis string
var laikinas = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = laikinas;
console.log(prekiautojai);


function sukeistiArrayElementus(x, y) {

  var laikinas2 = prekiautojai[x];
  prekiautojai[x] = prekiautojai[y];
  prekiautojai[y] = laikinas2;
  console.log(prekiautojai);

}
 sukeistiArrayElementus();



// -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// console.log(names);

// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
// keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta “butelis vandens”
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
// 3. istrinti 3-cia elmenta
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....






//

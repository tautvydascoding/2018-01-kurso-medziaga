console.log(" Labas ");


var phones = ["Huawei", "LG", "Samsung", "Blackberry"];
var ilgis = phones.length;
document.write("Masyvo ilgis:", ilgis);


//nauja eilute
function br() {
    document.write("<br>");
}
br();
//naujos eilutes pabaiga


// masyvo sudejimas/pavertimas i string/teksta
var tekstas = phones.toString();
document.write("Masyvo tekstas:", tekstas);

//nauja eilute
function br() {
    document.write("<br>");
}
br();
//naujos eilutes pabaiga

var tekstas2 = phones.join( " : ");  // " : " skyriklis tarp masyvo stalciu
console.log(tekstas2);
document.write(tekstas2);

//nauja eilute
function br() {
    document.write("<br>");
}
br();
//naujos eilutes pabaiga

//delete last element
phones.pop();
document.write(phones.join(" : ") + "<br>");

//idejimas i gala
phones.push("Alcatel");
phones.push("Nokia");
phones.push("One+");

document.write(phones.toString() + "<br>");

// istrinimas masyvo priekio
phones.shift();
console.log(phones.join('...'));

// idejimas masyvo priekio
phones.unshift('Huawei');
console.log(phones.join("::"));


delete phones[2];
console.log(phones);

//splice (2, 0, :"kiwis", "mangas" )


//splice delete
phones.splice(2, 1); // nuo antro (antra iskaitant) istrins viena stalciu
console.log(phones);

//splice insert
phones.splice(2, 0, "Kefyras", "Bulve"); // 2 tai nuo kur; 0 tai kiek istrinti; toliau tai ka ideti
console.log(phones);

//splice replace/trinimas ir iterpimas
phones.splice(4, 1, "NEC"); // istrynem 5 ir vietoj jo iterpem "NEC"
console.log(phones);

//====================================================

//bandom kurti masyvo kopija
// var kopija = phones; // NEGALIMA TAIP DARYTI nukopijuoja ne informacija o adresa i ramus. keiciant viena keistusi abu
// console.log("orginalas", phones);
// console.log("kopija", kopija);
// phones[0] = "alutis";
// console.log("orginalas", phones);
// console.log("kopija", kopija);

// phones; = "";
// console.log("orginalas", phones);
// console.log("kopija", kopija);

// taisyklingas kopijos kurimas
// slice() arba cat()
var tikraKopija = phones.slice(0); // "0" nuo kurio stalciaus kopijuoti NOTE: nepamirsti issisaugoti kopija i kintamaji
console.log("tikraKopija", tikraKopija);
var tikraKopija = phones.slice(3, 5); // nuo 3 iki 5
var tikraKopija = phones.slice(-3); // trys nuo galo
console.log("tikraKopija", tikraKopija);

//cat - keliu masyvu sujungimas

//sort - rikiuoja surikiuoja nuo A iki z. NOTE:  skaiciam netinkamas, skaicius rikiuoja kaip stringa, galima istaisyti
phones.sort()
console.log(phones);
phones.push(9);
phones.push(100);
phones.sort(function(a,b) {return a - b;});
console.log(phones);








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
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
// 3. istrinti 3-cia elmenta
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....






//

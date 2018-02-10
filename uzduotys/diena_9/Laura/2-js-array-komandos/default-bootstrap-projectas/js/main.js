console.log(" Labas ");

//
// // -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
//
// .length
// .join()
// .shift()
// .pop()

var phones = ["Nokia", "Iphone", "Samsung", "Motorola"];
var ilgis = phones.length;
console.log( ilgis);

// Masyvo sudejimas/pavertimas i Stringa:

var tekstas = phones.toString(); //suvveda visus zodzius i eilute;
console.log( tekstas);

var tekstas2 = phones.join(":");  //SKiriklis tarp masyvo reiksmiu. ((atskiria zodzius :, ka nurodome skliaustuose.))
console.log(tekstas2);

// delete last element
phones.pop();
console.log( phones.join("::") );

//insert last element
phones.push("Huawei");
phones.push("Teo");
phones.push("Alcatel");
console.log( phones.join(";;") );

//delete first element
phones.shift();
console.log( phones.join("..."));

//insert first element
phones.unshift("maskafonas");
console.log( phones);

/// ISTRINIMAS. stalciaus TURINIO..
delete phones[2];
console.log( phones);

//////// SPLICE. daug ka gali.
//splice delete
phones.splice(2, 1);   // nuo antro stalciaus istrinsim (2iskaitant) , 1-na VISA STALCIU;
console.log( phones);
//splice insert
phones.splice(2, 0, "raudonas", "melynas"); //"2"- nuo kur, "0" kiek istrinti, "raudonas" -iterpiamas elementas
console.log( phones);
//splice replace
phones.splice(5, 1, "LaLA")
console.log( phones);


//bandome kurti kopija
var kopija = phones   /// !!NEGALIMA
console.log("orginalas", phones);
console.log("kopija", kopija);
//kas bus jei kopija pakeisime??
kopija[0] = "sugedo";
console.log("orginalas", phones);
console.log("kopija", kopija);

/// asmenines KOPIJOS kurimas- taisyklinga kopija
//! slice()   arba   cat ()

var tikraKopija = phones.slice(0); // "0"- nuo kurio stalciaus kopijuoti
console.log(" tikra kopija", tikraKopija);

var tikraKopija = phones.slice(3, 5); //  nuo "3" iki "5" kopijuoti
var tikraKopija = phones.slice(-3); // trys nuo galo;

console.log(" tikra kopija", tikraKopija);

/// cat


// sort - rikiavimas
phones.sort(); // surikiuoja nuo A iki Z!! netinka SKAICIAMS, nes vercia i String. Galima istaisyti.
console.log( phones);

phones.push(9);
phones.push(1);
phones.sort ( function(a,b) { return a-b;} );
console.log( phones);

// =========================================================

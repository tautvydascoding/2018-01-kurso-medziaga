console.log(" Labas ");
// -------- --Array / Masyvai  TEORIJA --------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// console.log(names);
 
// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
// keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

var phones = ["Nokia", "iPhone", "Motorola", "Samsung"];

var ilgis = phones.length;
console.log( ilgis )

var text = phones.toString();
console.log( text );

var text2 = phones.join(" ");
console.log( text2);

// delete last element
phones.pop();
console.log( phones.join( " " ));

//  adds last element
phones.push("Huawei");
phones.push("Panasonic");
phones.push("Alkatel");
console.log( phones.join( " " ));


// removes first element
phones.shift();
console.log( phones.join( "..."));

// adss first element

phones.unshift("meskafonas");
console.log( phones.join( ";;" ));

delete phones[2];
console.log( phones.join( ","))

//splice deletes
phones.splice( 2, 1); //nuo antro istrins viena stalciu
console.log( phones );

//splice insert
phones.splice(2, 0, "Belekoks"); //nuo antro iterps ir nieko neistrins
console.log( phones);

//splice replace
phones.splice(4, 1, "Raudonas"); //replace the given item(istrina ir pakeicia)veikia su "minus" reiksmemis
console.log( phones );

//bandomekurit atsargine kopija
var kopija = phones;
console.log( "originaslas", phones );
console.log( "kopija", kopija );

// kas jeigu bus jei pakeisime kopija?
// phones.splice(3, 1, "Gerulis");
// console.log( "originaslas", phones );
// console.log( "kopija", kopija );

//asmenines kpijos kurimas

// slice() and cat()
// var tikraKopija = phones.splice(1); // 0 nuo kurio kopijuoja, ir butinai riekia issisaugoti variable
// console.log( "tikra kopija",tikraKopija );
// var tikraKopija = phones.splice(3, 5); //nuo 3 iki 5, veikia su "minus" reiksmemis
// console.log( "tikra kopija",tikraKopija );

// cat() - keliu masyvu sujngimas





// sort - rikiavimas
phones.sort(); //surikiuoja nuo a -z, netinka skaiciams, nes juos versia i stringus,galima pataisyti
console.log(phones);
var points = [40, 100, 1, 5, 25, 10];
points.sort(function(a,b) {return a-b});
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

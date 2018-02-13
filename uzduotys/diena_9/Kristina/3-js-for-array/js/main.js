console.log(" Labas ");

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

var masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = "0";
}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var mas = [];
for (var i = 0; i < 50; i++) {
    mas[i] = 1;
}
console.log(mas);

// // 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// // [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// for (var i = 0; i < 50; i++) {
//     i++; // i = i+6
//     mas[i] = 3;
//     // arba mas[++i] = 3;
// }
// console.log(mas);

// //arba

// for (var i = 0; i < 50; i = i + 2) { // i += 2
//     // tikrinu ar skaicius lyginis (ar liekana = 0)
//     if (i % 2 === 0) {
//         mas[i] = 3;
//     }
// }
// console.log(mas);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9" --------ND--------
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i > 50; i++) {
	i++;
	mas[i] = 9;
}
console.log(mas);

// ---------------ND--------------

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
// ) sunaikinti pirma STALCIU VISA
// ) tarp Petras ir Povilas, iterpti Marija
// ) surikiuoti Masyvai
// ) sunaikinti Marijos stalciu
// ) sukeisti vietomis pirma ir paskutini stalciu
// ) sukurti masyvo kojipa
// ) kopijos masyve istrinti nuo 2 iki 4
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
// ) prijungti kopijos masyva prie orginalo masyvos galo

var vardai = ["jonas", "petras", "povilas", "kestas", "karolis"] ;

// vardai.splice(1, 0, "marija");
// console.log(vardai);

// vardai.sort();
// console.log(vardai);

// delete vardai[2];
// console.log(vardai);

function sukeisti(x,y) {
	var x = vardai[x];
	vardai[x] = vardai[y];
	vardai[y] = x;
}
sukeisti(1, 3);
console.log("sukeiciam:", vardai);

// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kasnatra elementa
// [pirmo mazyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]

var m1 = ["a", "b", "c"];
var m2 = ["#", "@", "$"];
// m3  = a # b @ c $
var m3 = [];
for (var i = 0; i < 3, i++) {
    m3.push(m1[i]);
    m3.push(m2[i]);
}

// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai



//

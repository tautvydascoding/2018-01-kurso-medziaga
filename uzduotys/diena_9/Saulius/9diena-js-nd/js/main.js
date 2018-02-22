// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
var mas = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];
// ) sunaikinti pirma STALCIU VISA
mas.shift();
document.write(mas + "<div>");
// ) tarp Petras ir Povilas, iterpti Marija
mas.splice(1, 0, "Marija");
document.write(mas + "<div>");
// ) surikiuoti Masyvai
mas.sort();
document.write(mas + "<div>");
// ) sunaikinti Marijos stalciu
mas.splice(2, 1);
document.write(mas + "<div>");
// ) sukeisti vietomis pirma ir paskutini stalciu
var z = mas[0];
mas[0] = mas[3];
mas[3] = z;
document.write(mas + "<div>");
// ) sukurti masyvo kojipa
var kopija = mas.slice(0);
document.write(kopija + "<div>");
// ) kopijos masyve istrinti nuo 2 iki 4
kopija.splice(2, 3);
document.write(kopija + "<div>");
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
document.write(mas + "<div>");
// ) prijungti kopijos masyva prie orginalo masyvos galo
mas.push(kopija);
document.write(mas + "<div>");



// 6. sukurti du masyvus (skirtingus)
var aa = ["alus", "brendis", "viskis", "romas"];
var bb = ["cipsai", "suris", "desra", "ledukai"];
// naudojant for cikla sujungti juos, kasnatra elementa
// [pirmo mazyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
var cc = aa.splice(0);
for (i = 1, j = 0; i < 8; i+=2, j++) {
    cc.splice(i, 0, bb[j]);
}
console.log("Gerai apsirupine:", cc);


// kaip padaryti paprastai ir lengvai
var m1 = ["a", "b", "c"];
var m2 = ["#", "@", "$"];
var m3 = [];
for (i = 0; i < 3; i++) {
m3.push(m1[i]);
m3.push(m2[i]);
}
console.log("Gerai apsirupine:", m3);

//}

// for (var i = 0; i <aa.length; i++) {
//     aa[i] += bb[i];
// }

// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai



//

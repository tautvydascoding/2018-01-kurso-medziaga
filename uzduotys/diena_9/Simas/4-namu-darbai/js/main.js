console.log(" Labas ");

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
var vardai = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"]
// ) sunaikinti pirma STALCIU VISA
vardai.shift();
// ) tarp Petras ir Povilas, iterpti Marija
var index = vardai.indexOf("Petras") + 1;// +1 reikia nes kitaip idetu pries Petras
vardai.splice(index, 0, "Marija");
// ) surikiuoti Masyvai
vardai.sort();
// ) sunaikinti Marijos stalciu
var indexMarija = vardai.indexOf("Marija");
vardai.splice(indexMarija, 1);
// ) sukeisti vietomis pirma ir paskutini stalciu
var pirmas = vardai[0];
vardai[0] = vardai[vardai.length -1];
vardai[(vardai.length -1)] = pirmas;
// ) sukurti masyvo kojipa
var kopija = vardai.slice(0);
// ) kopijos masyve istrinti nuo 2 iki 4
kopija.splice(2, 4);
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
console.log(vardai)
// ) prijungti kopijos masyva prie orginalo masyvos galo
var sujungtos = vardai.concat(kopija);



// 6. sukurti su masyvus (skirtingus)
var merginos = ["Onute", "Gretute", "Bronyte", "Danute"];
var vaikinai = ["Petras", "Jonas", "Antanas", "Zigmas"];
// naudojant for cikla sujungti juos, kasnatra elementa
// [pirmo mazyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
var poros = merginos.slice(0);
// poros.splice(1, 0, vaikinai[0]);
// poros.splice(3, 0, vaikinai[1]);
// poros.splice(5, 0, vaikinai[2]);
for (i = 1, j = 0; i < 8; i+=2, j++) {
    poros.splice(i, 0, vaikinai[j]);
}

// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
var prekes = ["Pienas", "Miltai", "Kiausiniai", "Sausainiai", "Duona"];

// ["Duona",  "Sausainiai", "Kiausiniai","Miltai", "Pienas"];
// var i = 1;
// var tmp = prekes[i];
//     prekes[i] = prekes[(prekes.length -(i+1))];
//     prekes[(prekes.length -(i+1))] = tmp;
for (i = 0; i < ((prekes.length)/2); i++) {
    var tmp = prekes[i];
    prekes[i] = prekes[(prekes.length -(i+1))];
    prekes[(prekes.length -(i+1))] = tmp;
}





//

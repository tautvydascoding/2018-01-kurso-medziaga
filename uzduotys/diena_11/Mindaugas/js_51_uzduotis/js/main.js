// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100

for (var i = 0; i < 50; i++) {
    var k = Math.ceil(Math.random()*100);
    if ( k >= min && k <= 100) {
        masyvas.push(k);
    }
}

var y = masyvas.length;
console.log(masyvas, y);
var masyvasCopy = masyvas.slice();
// 2 UZDUOTIS:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 2 == 0) {
        masyvas[i] = "lyginis";
    }
}
console.log("lyginiai skaiciai pakeisti i zodi 'lyginis' ", masyvas, y)
// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
for (var i = 0; i < masyvasCopy.length; i++) {
    if (Math.random() < 0.1 ) {
        masyvasCopy[i] = masyvasCopy[i] * (-1);
    }
}
console.log(masyvasCopy, y);
// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
for (var i = 0; i < masyvasCopy.length; i++) {
         masyvasCopy[i] = Math.abs(masyvasCopy[i]);
}
console.log(masyvasCopy, y);
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
console.log(masyvasCopy.indexOf(Math.max.apply(null, masyvasCopy)), Math.max.apply(null, masyvasCopy));
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
console.log(masyvasCopy.indexOf(Math.min.apply(null, masyvasCopy)), Math.min.apply(null, masyvasCopy));

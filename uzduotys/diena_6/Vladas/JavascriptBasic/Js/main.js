console.log(" Labas ");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var vardas = "Petras",
    pavarde = "Petraitis",
    amzius = 28,
    atlyginimas = 760;
var nezinau;

console.log(vardas);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log( typeof(nezinau) );


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log("vardas", vardas);
    console.log("pavarde", pavarde);
    console.log("amzius", amzius);
    console.log("atlyginimas", atlyginimas);
}
printVardasPavardeAmzius(); // norint kad veiktu butinai pakartoti funkcija
printVardasPavardeAmzius(); // norint kad veiktu butinai pakartoti funkcija
printVardasPavardeAmzius(); // norint kad veiktu butinai pakartoti funkcija
printVardasPavardeAmzius(); // norint kad veiktu butinai pakartoti funkcija

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis() {
    var metinis = atlyginimas * 12;
    console.log("Metines Pajamos", metinis);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis = "Lietuva",
    miestas = "Kaunas",
    adresas = "Kursiu g. 7",
    pastoKodas = 22155;

function printAddressData() {
    console.log("Salis", salis);
    console.log("Miestas", miestas);
    console.log("Adresas", adresas);
    console.log("Pasto kodas", pastoKodas);
}
printAddressData();
printAddressData();
printAddressData();



// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(tekstas) {
    console.log(tekstas);
}
printTekstas("Pavyzdys");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function printRezultata(x, y) {
    console.log(x*y);
}
printRezultata (5, 8);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y
function printPritagoroTeorema(x, y) {
    console.log( Math.sqrt((x * x) + (y *y)) );
}
printPritagoroTeorema(4, 3);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

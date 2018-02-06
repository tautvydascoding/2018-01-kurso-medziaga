console.log("labas");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var vardas, pavarde, amzius, atlyginimas; // deklaracija

var vardas = "Tomas",
    pavarde = "Tomauskis",
    amzius = 21,
    atlyginimas = 500.99;
var nezinau;

console.log(amzius);
// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(nezinau));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log("Mano vardas:", vardas);
    console.log("Mano pavarde:", pavarde);
    console.log("Mano amzius:", amzius);
    console.log("Mano atlyginimas:", atlyginimas);
}
printVardasPavardeAmzius(); //liepiat kommpiuteriui surasti tokia f-ja ir ja ivykdyti

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis() {
    var metinesPajamos = atlyginimas * 12;
    console.log("Per metus uzdirbu:", metinesPajamos);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Lietuva",
    miestas = "Kaunas",
    adresas = "Krumu g. 7",
    pastoKodas = "554442";
function printAdresas() {
    console.log("Mano salis:", salis);
    console.log("Mano miestas:", miestas);
    console.log("Mano adresas:", adresas);
    console.log("Mano pasto kodas:", pastoKodas);
}
printAdresas();

// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(tekstas) {
    console.log(tekstas);
}
printTekstas("TV pagalba");
// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba(x, y) {
    console.log(x * y);
}
daugyba(7, 9);
daugyba(6, 12);
daugyba(52, 44);
// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ps. pitgoras lyg istikro skaiciuojasi (x*x+y*y)*0.5
function pitagoras(x, y) {
    var atsakymas = Math.sqrt((x*x) + (y*y)); // sqrt traukia sakni
    console.log("Pitagoras:", atsakymas);
}
pitagoras(3, 2);
//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

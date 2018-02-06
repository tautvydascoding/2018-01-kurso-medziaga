//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// naudoti var (vardas,pavarde,atlyginimas // deklaracija

console.log("Labas");

var vardas, pavarde, amzius, atlyginimas;
var vardas = "Tomas",
  pavarde = "Tomauskis";
var amzius = 21;
var atlyginimas = 500.99;
var nezinau;

console.log(amzius);



// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(nezinau));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {

  console.log("mano vardas", vardas);
  console.log("mano pavarde", pavarde);
  console.log("mano amzius", amzius);
  console.log("mano atlyginimas", atlyginimas);
}

printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis() {
  var metinesPajamos = atlyginimas * 12;
  console.log("per metus uzdirbu:", metinesPajamos);

}
printMetinisPajamuDydis();


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Kursiu g.7";
var pastoKodas = "6565";

function printAddressData() {
  console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();
// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(tekstas) {
  console.log(tekstas);
}
printTekstas("Vingiu Jonas");
printTekstas("rezultatas 65:86");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y) {
  console.log(x, "kart", y, "yra:", x*y)
  console.log(x * y);
}
daugyba(15, 100)
daugyba(25, 0.25)
daugyba(1, 0)

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema (x,y) {

var atsakymas = Math.sqrt( (x*x) + (y*y) );
console.log(atsakymas);

}
pitagoroTeorema (2,3);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

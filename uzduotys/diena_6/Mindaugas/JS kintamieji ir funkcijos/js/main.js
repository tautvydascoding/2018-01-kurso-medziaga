console.log("tekstas");

var adresas = "Kursiu g. 7"; //globali reiskme//
var pastoKodas = 25255; //globali reiksme//

console.log("Adresas", adresas, "Pasto Kodas", pastoKodas);
pastoKodas = 1000;
console.log("Adresas", adresas, "Pasto Kodas", pastoKodas);


//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

var vardas = "Mindaugas";
var pavarde = "Mickevicius";
var amzius = 34;
var atlyginimas = 1000;
var nezinau;

// alternatyviai var vardas, pavarde, amzius, atlyginimas;  (tada visi gaunami undefined)
// var vardas = "Mindaugas",
//    pavarde = "pavarde",
//      amzius = 34,
//      atlyginimas = undefined;
console.log(vardas);
console.log(typeof(atlyginimas));
console.log(typeof(nezinau));

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius () {
    console.log("Mano vardas", vardas);
    console.log("Mano pavarde", pavarde);
    console.log("Mano amzius", amzius);

}
printVardasPavardeAmzius ();
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis () {
    console.log("Metines pajamos", atlyginimas * 12);

}
printMetinisPajamuDydis ();
//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Lietuva",
    miestas = "Kaunas",
    adresas = "Puodziu g. 24-15",
    pastoKodaS = 223344;

function printAddressData () {
    console.log("Salis", salis);
    console.log("Miestas", miestas);
    console.log("Adresas", adresas);
    console.log("Pasto kodas", pastoKodaS);
}
printAddressData ();

// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas (x) {
    console.log(x);
}
printTekstas ("Jokubo istorijos");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba (x,y) {
    console.log(x*y);

}
daugyba (2,3);


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema (x,y) {
    var ats = Math.sqrt (x*x + y*y);
    console.log(ats);
}
pitagoroTeorema (2, 3);
alert ("Good morning!");

var number = 0;
while (number <= 16) {
    number = number + 2;
    console.log(number);

}

var note = '';
for (var i = 0; i < 7; i++) {
  console.log(note += '#');
}

for (var i = 0; i < 100; i++) {
  var number = i + 1;
  var result = "";
  if (number % 3 == 0) {
    result = "Fizz";
  }
  if (number % 5 == 0) {
  	result += "Buzz";
  }
  if (!result) {
  	result = i + 1;
  }
  console.log(result);
}
//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

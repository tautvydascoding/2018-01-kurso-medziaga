console.log(" Labas ");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

var vardas, pavarde, amzius, atlyginimas;

var vardas = "Tomas",
    pavarde = "Jonaits",
    amzius = 50,
    atlyginimas = 500.99;
var nezinau;
console.log(amzius);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(atlyginimas));
console.log(typeof(nezinau));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
// Aiskia rasyti FUNKCIJU PAVADINIMAAAA/////

function printVardasPavardeAmzius (){
    console.log("mano vardas", vardas);
    console.log("mano pavarde", pavarde);
    console.log("mano amzius", amzius);
}
printVardasPavardeAmzius(); //liepia kompiuteriui surasti tokia f-ja ir ja ivykdyti;
printVardasPavardeAmzius(); //liepia kompiuteriui surasti tokia f-ja ir ja ivykdyti;
printVardasPavardeAmzius(); //liepia kompiuteriui surasti tokia f-ja ir ja ivykdyti;
var x = 100/ 5 + 15;
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis() {
var metinesPajamos = atlyginimas * 12;
    console.log ("per metus uzdirbu:", metinesPajamos)
}
printMetinisPajamuDydis ();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis = "Lietuva",
    miestas = "Kaunas",
    adresas = "Kursiu g",
    pastoKodas = 45895;

function printAddressData() {
    console.log("Mano salis", salis);
    console.log("Mano miestas", miestas);
    console.log("Mano adresas", adresas);
    console.log("Pasto kodas", pastoKodas);

    console.log("Adresas", salis, miestas, adresas, pastoKodas);
}
printAddressData();

// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(tekstas) {
console.log( tekstas);
}
printTekstas("Vingiu Jonas");
printTekstas("Zalgiris");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba(x, y) {
    console.log(x*y);
}
daugyba(2, 2);

function dalyba(x,y){
    console.log(x/y);
}
dalyba(10, 2);


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos


function pitagoroTeorema(x, y) {
var atsakymas = Math.sqrt((x*x) + (y*y));  //sqrt-traukia sakni
    console.log(atsakymas);
}
pitagoroTeorema(2, 3);

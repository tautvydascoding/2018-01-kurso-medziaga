console.log("labas");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// var vardas = "Jonas";
// var pavarde = "Jonaitis";
// var amzius = 25;
// var atlyginimas = 700;
//
// console.log( "mano vardas", vardas);

var vardas, pavarde, amziu, atlyginimas; // deklaracija, tai galima veliau priskirti reiksmes

var vardas = "Tomas",
    pavarde = "Tomasas",
    amzius = 25,
    atlyginimas = 500.99;
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
printVardasPavardeAmzius(); // liepiat kompiuteriui surasti tokia f-ija ir ja vykdyti, be to jis funckija pamates neskaito nieko kas viduj {}

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)

function printMetinisPajamuDydis() {
var metinesPajamos = atlyginimas * 12;
console.log( "per metus uzdirbama:", metinesPajamos);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis, miestas, adresas, pastoKodas;

var salis = "lietuva",
    miestas = "kaunas",
    adresas= "kursiu 7",
    pastoKodas = 50187;

console.log(salis);

function printAddressData() {
    // console.log("adresas", salis, miestas, adresas, pastoKodas);
    // arba
    console.log("mano salis", salis);
    console.log("mano miestas", miestas);
    console.log("mano adresas", adresas);
    console.log("mano pastoKodas", pastoKodas);
}
printAddressData();

// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
    console.log(x);
}
printTekstas("Vingiu Jonas");
printTekstas("konsoles nebereik rasyt viska atspausdina");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y) {
    // var daugyba = x * y;
    // console.log("suma", daugyba);
    //arba
    console.log( "suma", x * y);
}
daugyba(15, 100);
daugyba(1, 100);
daugyba(25, 100);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema(x, y) {
    var atsakymas = Math.sqrt((x*x) + (y*y)); //sqrt - traukia sakni
    console.log(atsakymas);
}
pitagoroTeorema(2, 3)

//=============KOMANDINE (3-4h) Bootstrap && GIT===========
// ant lentos

var adresas = "Kursiu g. 7"; //globali reiksme
var pastoKodas = 25255; //globali reiksme

console.log("pasto kodas", pastoKodas, "aa" );

pastoKodas = 1000;
console.log("pasto kodas", pastoKodas, "aa" );

// ===================pasikartoti  F-jas===================ND----------
//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius

var vardas = "alma";
var pavarde = "petryte";
var klase = 5;
console.log(vardas, pavarde, klase);

//  02 UZDUOTIS
// sukurti funkcijas:
// printName()  printLName(), printClass() ,
// kurios atspausdina i konsole pirmos uzduoties kintamuosius
 
function printName() {
console.log(vardas, pavarde, klase);
 }
 printName();

function printLName() {
console.log(vardas, pavarde, klase);
 }
 printLName();

function printClass() {
console.log(vardas, pavarde, klase);
 }
 printClass();

//  03 UZDUOTIS
// parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem

function printVardasPavardeKlase(name, lname, klase) {
    console.log("vardas:", name, "pavarde:", lname, "klase:", klase);

}
printVardasPavardeKlase("jonas", "jonaitis", 6);
printVardasPavardeKlase("rita", "ritute", 8);
printVardasPavardeKlase("juozas", "juozutis", 5);
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var vardas = "Tadas",
    pavarde = "Majauskas",
    amzius = 35,
    atlyginimas = 999.99;

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(atlyginimas));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log("Mano vardas -", vardas);
    console.log("Mano pavarde -", pavarde);
    console.log("Mano amzius -", amzius);
    console.log("Mano atlyginimas -", atlyginimas);
}

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis() {
    var metinesPajamos = atlyginimas * 12;
    console.log("Metinis atlyginimas:", metinesPajamos);
    
}

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis = "Suomija",
    miestas = "Helsinkis",
    adresas = "Ezero g. 3",
    pastoKodas = 54709;

    function printAddressData() {
        console.log(salis, miestas, adresas, pastoKodas);
    }
// ---- advance----- 

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
    console.log(x);
}

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba(x, y) {
    console.log(x * y);
    
}

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y
function pitagoroTeorema(x, y) {
    var pitagoroTh = Math.sqrt(x * x + y * y);
    console.log(pitagoroTh);
}
//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

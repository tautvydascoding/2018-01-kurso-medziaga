console.log("Sveikas");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var vardas ="Aurelijus";
var pavarde ="Pavardenis";

var amzius =32;  //globalo reiksme
var atlyginimas = 97.54;

var neapibrezta;

console.log("Vardas = ",vardas);
console.log("Pavarde = ",pavarde);
console.log("amzius = ",amzius , "atlyginimas = ",atlyginimas);


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(atlyginimas));
console.log(typeof(neapibrezta));
//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius(){
    console.log("pirmas kintamasis: ",vardas);
    console.log("antras kintamasis: ",pavarde);
    console.log("trecias kintamasis: ",amzius);
    console.log("Menesinis atlyginimas: ",atlyginimas);
}
//printVardasPavardeAmzius(vardas);         //funkcijos iskvietimas, nurodo kompiuteriui ja surasti
printVardasPavardeAmzius();
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus uzduotis 1 kintamajam - atlyginimas)
function printMetinisPajamuDydis(){
        var metinis = atlyginimas * 12;
        console.log("Metinis atlyginimas =", metinis);
}
printMetinisPajamuDydis();
//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis, miestas, adresas, pastoKodas;
    salis= "Bermudai"; miestas= "Vaiduokliu";
    adresas= "Zombiu g."; pastoKodas= 12345;

function printAddressData(){
    console.log("Gyvenamoji vieta:\n",salis ," \n", miestas,"\n",adresas,"\n",pastoKodas );
}
printAddressData();
// ---- advance-----

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(tekstas){
    console.log(tekstas);
}
printTekstas("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");

printTekstas("teksto iskvietimas per funkcija");
// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function AritmetiniaiVeiksmai(n,m){
    var ats;
    ats= n*m;

    //console.log("atsakymas = ", ats= n*m);    arba
    console.log("atsakymas = ", ats);
}
AritmetiniaiVeiksmai(2,6);  //paduodamos reiksmes n ir m i funcija AritmetiniaiVeiksmai

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y
function Pitagoras(x, y){
    var ats;
    ats = Math.sqrt((x*x)+(y*y));
    console.log("Krastines ilgis = ", ats);
}
Pitagoras(2, 3);



//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

console.log(" Labas ");
//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

var alga = 500;
// alga = alga + 50;
// alga += 50;
if (alga += 50) {
    console.log(alga);
}
//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
// 		 https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skiacius 50)

for (var i = 0; i < 50; i++) {
    console.log("azuolas \n\n\n");
}

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

var x = document.querySelector('section');
console.log(x); // x yra section - cia tas elm tai jo nebereik ieskot daugiau, viska galima det, snaiges:)
x.innerHTML += "<h2> azuolas </h2>";
for (var i = 0; i < 10; i++) {
    x.innerHTML += "<h2> azuolas </h2>"; // += prie esamos sumos reiksmes prideda
}
// 2 A UZDUOTIS
// sukurti f-ja printX(xx) i browser langa

function printX(reiksme) {
    document.querySelector('section').innerHTML += reiksme;
}
printX("testuoju");

// 2.2 UZDUOTIS
// paleisti f-ja printX 100 kartu

for (var i = 0; i < 100; i++) {
    var tekstas = "testuoju karta" + 1;
    printX(tekstas);
}

//  3 UZDUOTIS
// paleisti f-ja printX 12 kartu ir atspausdinti <img ...

// for (var i = 0; i < 12; i++) {
//     var paveiksliukas = "<img src='2.jpg' width='100px' alt='foto'>" // cia ne paveikslukas, cia tik string kol kas
//     // document.write(paveiksliukas);
//     // //arba
//     document.querySelector('h1').innerHTML += paveiksliukas;
//     printX(paveiksliukas)
// }

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |

function piestiEilute(ilgis) {
    document.querySelector('h1').innerHTML += "<br>"; // tam kad neskaiciuotu for cikle
    for (var i = 0; i < ilgis; i++) {
        document.querySelector('h1').innerHTML += "-";
        console.log('-');
            }
    document.querySelector('h1').innerHTML += "<br>";
}
piestiEilute(50);
piestiEilute(10);
piestiEilute(30);


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime per 10 metu , jei pradzoje uzdirbdami 680 return, kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

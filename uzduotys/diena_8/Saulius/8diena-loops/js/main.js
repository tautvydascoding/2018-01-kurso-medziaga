console.log(" Labas ");

//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
// 		 https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration
var alga = 500;
var alga = alga + 50;
alga += 50;
console.log(alga);
// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skiacius 50)
for (var i = 0; i < 50; i++) {
    console.log("Azuolas");
}
// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
var x = document.querySelector('section');
    console.log(x);
    x.innerHTML += "<h2> Azuolas </h2>";
x.innerHTML += "<h2> Azuolas </h2>";
//arba
// for (var i = 0; i < 50; i++) {
// document.querySelector('section').innerHTML = "<h2> Azuoliukas </h2>";
// }

// 2 A UZDUOTIS
// sukurti f-ja printX(xx) i browser langa
function printX(reiksme) {
    document.querySelector('section').innerHTML += reiksme; // be + nedadetu o istrintu buvusias section reiksmes
}
printX("testuoju");
// 2B UZDUOTIS
// paleisti f-ja printX 100 kartu
for (var i = 0; i < 100; i++) {
    printX("serbentautas" + i); // tekstas + tekstas = "tekstas tekstas"
// "tekstas + i"
}

//  3 UZDUOTIS
// paleisti f-ja printX 12 kartu ir atspausdinti <img ...
var paveiksliukas = "<img src='./balionas.png' width='100px' alt='neradau foto'  >"; //tekstas ne paveiksliukas cia
// tekstas
// document.write(paveiksliukas); //idetu psl apacioje
//arba
for (var i = 0; i < 12; i++) {
    document.querySelector('h1').innerHTML += paveiksliukas; //

}



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
var bruksnys = "-";
var stulpelis = "/";
// realiai reiketu susikurt funkcija su kuria galima pakeisti bruksio ilgi (kad nebutu had coded)
for (var i = 0; i < 30; i++) {
    document.write(bruksnys);
}
document.write("<br>" + "vardas / pavarde / amzius" + "<br>");
for (var i = 0; i < 30; i++) {
    document.write(bruksnys);
}
for (var i = 0; i < 5; i++) {
    document.write("<br>" + stulpelis);
}
// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime per 10 metu , jei pradzoje uzdirbdami 680 return, kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%




//================ local/global or SCSS or  Bootstrap Layout or Frog/Garden ======================

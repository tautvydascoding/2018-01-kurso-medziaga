//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
// 		 https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration
// var alga = 500;
// alga = alga + 50;
// alga += 50 tas pats kas alga = alga + 50

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skiacius 50)
var medis = "Azuolas"
for (i = 0; i < 50; i++) {
    console.log(medis);
}

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
var article = document.querySelector('article'); //reikia susikurti var kad nereiktu kompui jo ieskoti daugybe kartu, kad puslapis veiktu greiciau
// document.querySelector('article')innerHTML += "<h2>Azuolas</h2>" tada nesunaikins jau esamo elemento
console.log( article );
article.innerHTML = "<h2>Azuolas</h2>";

for (i = 0; i < 50; i++) {
    // section.innerHTML = "<h2>Azuolas</h2>"; netinka nes kiekviename rate pakeicia
    article.innerHTML = "<h2>Azuolas</h2>"; //prie esamos vertes prideda

}

// 2 A UZDUOTIS
// sukurti f-ja printX(xx) i browser langa (panaudojant document.write arba innerHTML)
function printX(reiksme) {
    document.querySelector("article").innerHTML += reiksme;
}

// 2B UZDUOTIS
// paleisti f-ja printX 100 kartu
for (i = 0; i < 50; i++) {
    printX("lalla"); //"tekstas" + "tekstas" = "tekstastekstas"
}
//  3 UZDUOTIS
// paleisti f-ja printX 12 kartu ir atspausdinti <img ...
var paveiksliukas = "<img src='./logo.png' width='200px' alt='neradau foto'>"; //nereikia iseiti, nes jis ikodinamas HTML faile, o ne JS
// document.write( paveiksliukas );

document.querySelector("h1").innerHTML += paveiksliukas;

for (i = 0; i < 12; i++) {
    document.querySelector("h1").innerHTML += paveiksliukas;
}


// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);  
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

function lentele(ilgis) {
    for (i = 0; i < ilgis; i++) {
        document.write("-"); // Avoid using document.write
        // document.querySelector("h1").innerHTML += "-";
    }

    document.write("<br>");

    document.write("/ vardas /  pavarde / amzius");

    document.write("<br>");

    for (i = 0; i < ilgis; i++) {
        document.write("-");
    }

    document.write("<br>")

    for (i = 0; i < 5; i++) {
        document.write("/")
        document.write("<br>")
    }
}

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime per 10 metu , jei pradzoje uzdirbdami 680 return, kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%


function sudetiniaiProcentai(menAtlyginimas, kiekMenesiu, algosPokytis) {
    for (i = 0; i <= kiekMenesiu; i++) {
        var procentaiAlgos = (menAtlyginimas / 100) * algosPokytis;
        menAtlyginimas += procentaiAlgos;
    }
    return menAtlyginimas;
}

//================ local/global or SCSS or  Bootstrap Layout or Frog/Garden ======================
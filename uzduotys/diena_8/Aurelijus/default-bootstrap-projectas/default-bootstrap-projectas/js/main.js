console.log(" Labas ");
//
// var alga = 500;
//
// alga += 50;// 550   =+ prilygina naujai reiksmei tada prideda 50 bet isveda senesne reiksme, o nauja lieka kompe

//document.write("alga = ", alga);
//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
// 		 https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skiacius 50)
//var Azuolas;
// for(var i=0; i<=50; i++){
//     //console.log("Azuolas ", i);
//     document.write("Azuolas ", i);
// }
// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
var x = document.querySelector('section');
console.log(x);
x.innerHTML = "<h1> Azuolas </h1>"; //innerHTML pakeicia reiksme
//arba
document.querySelector('section').innerHTML += "<h1> Azuolas </h1>";

// 2 A UZDUOTIS
// sukurti f-ja printX(xx) i browser langa
function printX( reiksme){
    document.querySelector('section').innerHTML += reiksme;
}
printX("testuoju");

// 2B UZDUOTIS
// paleisti f-ja printX 100 kartu
for(var i= 0; i<=100; i++){
    printX("testavimo nr = "+ i);
}
//  3 UZDUOTIS
// paleisti f-ja printX 12 kartu ir atspausdinti <img ...
var paveiksliukas = "<img src='./images/GoodBook.jpg' width='100px' height='100px' alt='nera foto'>"; //ne paviksliukas, tiesiog tekstas
// document.write(paveiksliukas);   document.write(paveiksliukas);
//arba
for(var i = 0; i<=12; i++){
document.querySelector('section').innerHTML += paveiksliukas;
}

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
function piestiEilute(){
    for (var i =0; i<8; i++){
        // var x = console.log("----");
        var y = document.write("----");
    }
}

function piestiStulpeli(){
    for (var i=0; i<8; i++)
    var y = document.write("<br>|");
}
function antraste(){
    var z = document.write("<br> | vardas | pavarde | amzius | <br>");
}

piestiEilute();
antraste();
piestiEilute();
piestiStulpeli();


function piestiEilute2(){
    document.querySelector('h1').innerHTML += "<br>";
    for (var i = 0; i<25; i++){
        document.querySelector('h1').innerHTML += "-";
        console.log('-');
    }
    document.querySelector('h1').innerHTML += "<br>";
}
piestiEilute2(50);

function algosKilimas(){
    var alga= 680;
    for (var i = 0; i<=120; i++){
        alga = alga + 6.8;
    }
    document.write(alga);
}

algosKilimas();



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
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

//================ local/global or SCSS or  Bootstrap Layout or Frog/Garden ======================

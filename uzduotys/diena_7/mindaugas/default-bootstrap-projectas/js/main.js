// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> "); //tevu tevo vaikas

// window.alert("labas"); //tevu tevas
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
document.querySelector('h1').innerHTML = " <b>Antraste</b>"; //su situo issivedam elementa
// .querySelectorAll paselektina visus elementus ir issaugo masyve. pasiimant is masyvo butina nurodyti vieta (eiles numeris)
//innerHTML - keicia surasto HTML elemento vidu


//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;
console.log(aukstis);

 // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina (x) {

    console.log("Kaina: ", x);
    // arba
    document.write("Kaina: " + x + "<Br>");
}
printKaina ("999.00");
printKaina ("13.49");



// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis () {
var x = (5 + 10 + 8 + 6 + 8) / 5;
    console.log("Vidurkis: ", x);
}
pazymiuVidurkis ();




// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1 (x1, x2, x3, x4, x5) {
        var y = (x1 + x2 + x3 + x4 + x5) / 5;
        console.log("Vidurkis: ", y);
}
pazymiuVidurkis1 (5, 3, 6, 9, 10);

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
    var vardas = "Tomas";
    return vardas;   //return nutraukia funkcijos darba kaip ir ciklo
}
var k = getVardas ();
console.log(k);
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    var x = k;
    var y = "Jonaitis";
    var a = " ";
    var z = x + a + y;
    return z;
}
var z = getVardasPavarde ();
console.log("Vardas Pavarde: ", z);
 document.write("Vardas Pavarde: ", z);

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAuksctis () {
    var aukstis = document.querySelector("main").clientHeight;
    console.log(aukstis);
    return aukstis;
}
var h1 = getH1ElementoAuksctis ();
console.log("main elemento aukstis: ", h1);
document.write("<Br>", "main elemento aukstis: ", h1 );

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// =================FOR intro  ======================


// for (apibreziamas kintamasis; salyga kiek ciklas vyksta laiko; kintamojo kitimo funkcija);

// for (var i = 0; i < 50 ; i += 2) {
//     console.log("labas");
//     console.log("i = ", i);
// }

// nupiesti trikampi is #
//
// var note = '';
// for (var i = 0; i < 7; i++) {
//   console.log(note += '#');
// }
var note = " ";
for (var i = 0; i < 50; i++) {
    note = note + "#";
    console.log(note);
}



//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

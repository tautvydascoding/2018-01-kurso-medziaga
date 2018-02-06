// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:


//document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
//document.querySelector('h1').innerHTML = " <b>Pakeistas tekstas</b>";
//querySelector - paieskos/selector komanda (veikia pagal
//CSS taisykles pvz: '.class', '#id')
//innerHTML - keicia surasto HTML elemento vidu

//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
function printKaina(x){
    //for (i = 0; i>x; i++)
    console.log("kaina: ", x);
}

printKaina(999.00);
printKaina(13.49);
printKaina(100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis(){
    //var vidurkis;
    vidurkis = (5+10+8+6+8)/5;
    console.log("Vidurkis", vidurkis);
}
pazymiuVidurkis();
// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkisPadavus(x1, x2, x3, x4, x5){
    vidurkis1 = (x1+x2+x3+x4+x5)/5;
    console.log("Vidurkis padavus", vidurkis1);
    document.write( "Vidurkis naudojant document.write: ",vidurkis1 );
}
pazymiuVidurkisPadavus(5, 10, 8, 6, 8);
//=====================RETURN==================
// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
function getVardas(){
    var vardas = "Vardenis";    //lokalus kintamasis tik sios funkcijos viduje
    //console.log("Grazinamas Vardas", vardas);
    return vardas;  //funkcija sustabdo darba, zemiau kodas nebevykdomas
}
var x = getVardas();    //vardas = Vardenis
console.log("Vardas per return", x);

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas
// patikrinti ar veikia f-ja
function getVardasPavarde(){
vardas1= "Aloyzas";
pavarde1="Grabnauskis";
//var tekstas = vardas1 + pavarde1;
return vardas1 + pavarde1;  //sudeda kintamuosiuos ir grazina kaip viena
//return tekstas;
console.log("sitas tekstas nesuveiks, nes yra po return");
}

var x = getVardasPavarde();
console.log(x);
document.write("<br>Vardas ir Pavarde: ", x );  //isvedamas kaip vienas elementas
// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
function getH1ElementoAukstis(){
    var x =document.querySelector('h1');
    //console.log("h1 elementas", x);
    // var aukstis1 = x.offsetHeight;
    // console.log("aukstis1: ", aukstis1); //isvedimas testavimui
    var aukstis2 = document.querySelector('h1').offsetHeight;
    console.log("aukstis2: ", aukstis2);    //isvedimas testavimui
    return aukstis2;
}

var aukstis = getH1ElementoAukstis();
document.write("<br>",aukstis);
// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

// =================FOR intro  ======================

// for(var i=0; i<10; i++){
//     //console.log("Labadiena");
//     //document.write("<br> i= ",i);
//     //console.log("i= ", i);
// }

// nupiesti trikampi is '#'
var y ="";
for(var i=0; i<50; i++){
    y += '#';
    document.write("<br>",y);
//console.log(y);
}

console.log("11 /3. Liekana yra = ", 11%3);



//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
//================ local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ======================

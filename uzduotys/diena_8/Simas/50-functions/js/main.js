// UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) sukurti 50 f-ju.
// nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// lygines f-jos turi pakeisti varda ir uzdeti skiaciu salia
// NOTE: visas f-jas iskviesti
// pvz.:
// var vardas = "Tomas";
// 1
// function getVardas1() {
//   return vardas + "1";
// }
// // var x = getVardas1();   // arba  console.log(  getVardas1() );
// console.log(  x );

// 2
// function setVardas2(name) {
//    vardas = name + "2";
// }
// setVardas2("antanas"); 
var vardas = "Tomas";

// 1
function getVardas1() {
    return vardas + "1";
}
console.log(getVardas1());

// 2
function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("Bronius");

// 3
function getVardas3() {
    return vardas + "3";
}
 console.log(getVardas3());

 // 4 
 function setVardas4(name) {
     vardas = name + 4;
 }
 setVardas4("Simas");

 //5
 function getVardas5() {
     return vardas + "5";
 }
console.log(getVardas5());

//6
function setVardas6(name) {
    vardas = name + "6";
}
setVardas6("Lukas");

//7 
function getVardas7() {
    return vardas + "7";
}
console.log(getVardas7());

//8
function setVardas8(name) {
    vardas = name + "8";
}
setVardas8("Dobis");

//9 
function getVardas9() {
    return vardas + "9";
}
console.log(getVardas9());

//10
function setVardas10(name) {
    vardas = name + "10";
}
setVardas10("Dumbuldoras");

//11
function getVardas11() {
    return vardas + "11";
}
console.log(getVardas11());
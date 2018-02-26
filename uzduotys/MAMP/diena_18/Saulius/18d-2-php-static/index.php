<?php

//static pavizdys:

function augu() {
    $ugis = 50; //local
    echo "Ugis: $ugis <br>";
    $ugis++;
}
// augu();
// augu();
// augu();
// augu();
// augu();


// su static
function augu2() {
    static $ugis = 50; //static - kintamasis nebus naikinamas pabaigus funkcijos darba
    echo "Ugis: $ugis <br>";
    $ugis++;
}
// augu2();
// augu2();
// augu2();
// augu2();
// augu2();

// rekursija - pati save paleidzianti funkcija
// uzduotis atspauzdinti 20000 kart "labas" ir salia kiek kart mes tai spauzdinam
function testRecursion() {
    static $nr = 0;
    echo "labas $nr <br>";
    $nr++;
if($nr < 20) {
    testRecursion();
    }
}
// testRecursion();


// printins labas 20 x 20
function testRecursion2() {
    static $nr = 0;
    $nr++;
if($nr < 20) {
    testRecursion2();
    }
    echo "labas $nr <br>";
}
// testRecursion2();


//========================================
$vardai = ["Tomas", "Jurgis"];
function spausdinti() {
    getVardas();
    echo " spauzdinu varda";
}
function getVardas() {
    $x = getVardasIsDB();
    echo "imu varda : " . $x;
}
function getVardasIsDB() {
    global $vardai;
    return $vardai[0];
}
spausdinti();

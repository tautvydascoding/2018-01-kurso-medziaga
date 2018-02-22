<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

function augu() {
    $ugis = 55; //kiekviena karta iskvietus funkcija sukuriamas tas pats kintamasis
    echo "Mano ugis: " . $ugis . "<br>";
    $ugis++;
}
function augu22() {
    static $ugis = 55; //auginamas skaicius
    echo "Mano ugis: " . $ugis . "<br>";
    $ugis++;
}

augu();
augu();
augu();
augu();
echo "<br>";
augu22();
augu22();
augu22();
augu22();


//---------rekursija (recoursion), kur funkcija pati save paleidzia
//UZDUOTIS: atspausdinti 20 kartu labas ir salia kelinta karta spausdiname skaityti funkcija

function testRecursion() {
    static $nr = 0;
    // echo "Labas $nr <br>";  // spausdina labas1, labas2, labas3
    $nr++;
    if ($nr < 20) {
        testRecursion();
        echo "Labas $nr <br>"; // spausdina labas20 19 kartu
    }
    // echo "Labas $nr <br>"; // spausdina labas 20 kartu
}
testRecursion();

///===================
$vardas = ['tomas', 'jurgis'];
function spausdinti() {
    getVardas();
    echo " ir spausdinu ";
}
function getVardas() {

    $x = getVardasIsDB();
    echo "<br> imu varda $x";
}

function getVardasIsDB() {
    global $vardas;
    return $vardas[0];
}


spausdinti();

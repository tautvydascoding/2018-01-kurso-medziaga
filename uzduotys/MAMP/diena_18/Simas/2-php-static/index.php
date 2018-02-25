<?php
//static pvz

// function augu() {
//     $ugis = 50;
//     echo "Ugis : $ugis <br>";
//     $ugis++;
// }

// augu();
// augu();
// augu();
// augu();
// augu();
// augu();

// function augs() {
//     static $ugis = 50;
//     echo "Ugis : $ugis <br>";
//     $ugis++;
// }

// augs();
// augs();
// augs();
// augs();
// augs();

//------------rekurcija f0ja pati save paleidzianti
//uzduotis
//1)20 kartu atspausdinti zodi "labas" ir salia, kelinta karta ji spausdiname
// function testRecursion() {
//     static $nr = 0;
//     echo "labas $nr <br>";
//     $nr++;
//     if ($nr < 200) {
//         testRecursion();
//     }
// }
// testRecursion();
$vardai = ["tomas", "jurgis"];
function spausdinti() {
    getVardas();
    echo "1) spausdinu varda: ";
}

function getVardas() {
    $x = getVardasIsDb();
    echo "2) imu varda ". $x;
}

function getVardasIsDb() {
    global $vardai;
    return $vardai[0];
}
spausdinti();
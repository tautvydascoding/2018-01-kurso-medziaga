<?php

    //static pavyzdys
    //
    // function augu() {
    //     static $ugis = 50;
    //     echo "ugis: $ugis <br>";
    //     $ugis++;
    // }
    // augu();
    // augu();
    // augu();
    // augu();
    // augu();
    // augu();
    // augu();


    //---rekurcija--funkcija paleidzia pati save su if------

    function testRecursion() {
        static $nr = 0;
        echo "Labas:  $nr  <br />";
        $nr++;
        if($nr < 20) {
            testRecursion();
        }
    }
testRecursion();



//==============
$vardai = ["tomas", "jurgis"];
function spausdinti() {
    getVardas();
    echo "1. spasdinu varda: ";
}
function getVardas() {
    $x = getVardasIsDb();
    echo "2. imu varda" . $x;
}
function getVardasIsDb() {
    global $vardai;
    return $vardai[0];
}
spausdinti();

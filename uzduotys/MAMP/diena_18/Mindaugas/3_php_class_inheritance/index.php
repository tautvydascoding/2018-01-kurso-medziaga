<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

class Zmogus {

    public function printItem() {
        echo " Labas ";
    }

}

class Moteris extends Zmogus {

}

class Vyras extends Zmogus {

}

$martyna = new Moteris();
$juozas = new Vyras();


$martyna->printItem(); //abu per extends paveldi printItem() funkcija
$juozas->printItem(); //

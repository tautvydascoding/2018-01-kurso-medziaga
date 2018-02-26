<?php

// paveldimumo (extends) pavyzdys
class Zmogus {
    public function sveikintis() {
        echo "Labas";
    }
}
class Moteris extends Zmogus {

}
class Vyras extends Zmogus {

}

$Martyna = new Moteris();
$zmogutis = new Zmogus();  // tiek martyna tiek zmogutis gali pacallinti funkcija sveikintis

$zmogutis->sveikintis(); // "Labas"
$Martyna->sveikintis(); // "Labas", nes paveldint prieinama ir prie public ir prie protected kintamuju ir f-ju.

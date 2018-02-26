<?php

class Zmogus {
     public function sveikintis()    {
           echo 'Labas ';
        }
       }
class Moteris extends Zmogus {

}

$martyna = new Moteris();
$zmogutis = new Zmogus();
$martyna->sveikintis();     //labas
$zmogutis->sveikintis();    //labas, nes paveldint prieinama prie "public" ir "protected" kintamuju ir funkciju

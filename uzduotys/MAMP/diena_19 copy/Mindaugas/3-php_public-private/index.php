<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

//sukurti dvi klases. b klase paveldi a klase.


class A {
    public $name = 'vardas';
    protected $plaukuSpalva = 'raudona';
    private $sirdiesYda = 'prolapsas';
    public function getLiga() {
        return $this->sirdiesYda;
    }

}


class B extends A {


    public function getPlaukuSpalva () {
        return $this->plaukuSpalva;
    }

}

$B = new B();

echo $B->name . "<br>";
echo $B->getPlaukuSpalva() . "<br>";
echo $B->getliga() . "<br>";

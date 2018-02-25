<?php

class A {
    public $name = "Jurgita"; //gali prieiti visi
    protected $plaukuSpalva = "red"; //ji zino class A ir visi kas ja paveldi
    private $sirdiesYda = "blogai"; //prie jo niekas kitas tik class A negali prieiti
    public function yda() {
        return $this->sirdiesYda;
    }
}

class B extends A {
    public function getSpalva() {
        return $this->plaukuSpalva;
    }

}

$Petras = new B();
echo $Petras->name ."<br>";
echo $Petras->getSpalva() ."<br>";
echo $Petras->yda() ."<br>";



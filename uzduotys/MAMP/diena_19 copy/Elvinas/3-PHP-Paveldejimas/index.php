<?php


class A {

private $name = "Jonas <br>"; // nepaveldimas
public $plaukuSpalva = "Juoda";
protected $sirdiesYda = "Yra";
public function getName() {

  return $this->name;


}
  }


class B extends A {

  public function printSirdiesYda() {

    echo $this->sirdiesYda;


  }


}

$objektas = new B();
echo $objektas->plaukuSpalva . "<br>"; // Juoda
// echo $objektas->name . "<br>" //bus error nes b klase nieko apie ji nezino nes jis privatus
// sprendimas - a klaseje susikurti f-ja kuri grazins ta reiksme
echo $objektas->getName();
$objektas->printSirdiesYda();

<?php

//UZDUOTIS
//1.
// create class A B
// B inherits A
// A vars $name; $plaukuSpalva; $sirdiesYda;
//2.
// create object  B
// print all vars (no echo)

include_once './A.php';

class B extends A {
    public function getName() {
        return $this->name;
    }
    public function suma() {
        echo $this->plaukuSpalva . $this->getName() . $this->getYda();
    }
}
$BObj = new B();
echo $BObj->getName();
echo $BObj->plaukuSpalva;
echo $BObj->getYda();
echo $BObj->suma();

<?php

class A {
    protected $name = "Ramunas "; // nepaveldimas
    public $plaukuSpalva = "Zalia ";
    private $sirdiesYda = " nera";
    public function getYda() {
        return $this->sirdiesYda;
    }
}

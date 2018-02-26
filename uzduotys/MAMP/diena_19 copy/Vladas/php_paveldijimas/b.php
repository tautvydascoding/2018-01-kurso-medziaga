<?php


include ("./a.php");


class B extends A {
    public function vardas() {
        echo $this->name;
    }
    public function spalva() {
        echo $this->plaukuSpalva;
    }
    public function yda() {
    }

}

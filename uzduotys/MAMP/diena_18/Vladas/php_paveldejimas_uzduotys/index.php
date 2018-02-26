<?php


// sukurti dvi klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris: estrogenai
// vyras: testosteronai

// uzduotis: susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju ugi, svori, pinigu skaiciu, hormono skaiciu

class Zmogus {
     public $ugis = 180;
    protected $svoris = 90;
    private $pinigai = 10000;
    public function getPinigai() {
        return $this->pinigai;
    }
       }
class Moteris extends Zmogus {
    public $estrogenai = 3450;
    public function getSvoris() {
        return $this->svoris;
    }
}

class Vyras extends Zmogus {
    public $testosteronai = 9980;
    public function getSvoris() {
        return $this->svoris;
    }
}

$Monika = new Moteris();
$Tadas = new Vyras();

echo "Monikos dienorastis: <br>";
echo $Monika->ugis . "<br>" . $Monika->getSvoris() . "<br>" . $Monika->getPinigai() . "<br>" . $Monika->estrogenai . "<br>";

echo "Tado dienorastis: <br>";
echo $Tadas->ugis . "<br>" . $Tadas->getSvoris() . "<br>" . $Tadas->getPinigai() . "<br>" . $Tadas->testosteronai . "<br>";

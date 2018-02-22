<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// sukurti dvi klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris: estrogenai
// vyras: testosteronai

// uzduotis: susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju ugi, svori, pinigu skaiciu, hormono skaiciu

class Zmogus {
    public $ugis = 180;
    protected $svoris = 65;
    private $pinigai = 1000;

    protected function zmoKin() {
        echo "<br>ugis: " . $this->ugis . " svoris: " . $this->svoris . " pinigai: " . $this->pinigai . " ";
    }

}
class Moteris extends Zmogus {
    public $estrogenai = 123;

    public function spausdinti() {
        $this->zmoKin();
        echo "estrogenai: " . $this->estrogenai . "<br>";
    }

}

class Vyras extends Zmogus {
    public $testosteronas = 8765;

    public function spausdinti() {
        $this->zmoKin();
        echo "testosteronas: " . $this->testosteronas . "<br>";
    }
}

$monika = new Moteris();

$tadas = new Vyras();

$monika->spausdinti();
$tadas->spausdinti();

// 2
// uzduotis:
// 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
    // 0) Ar gali tureti kintamuosius????
    // changeName($a)
    // isLogin()
    // getName()


// 3
// =============abstract class and function======================
// 2) sukurti (abstrakcia) klase "User" :
// 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
// A) kuri turi neprivalomus kintamuosius:
    // name, password , createdDate, lastLogin
// B) privaloma funkcija "Loguot()"
// C) neprivaloma funkcija clearlastLoginTime()

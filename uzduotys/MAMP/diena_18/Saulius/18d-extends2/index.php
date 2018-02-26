<?php


// sukurti dvi klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris: estrogenai
// vyras: testosteronai

// uzduotis: susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju ugi, svori, pinigu skaiciu, hormono skaiciu


//klasiu ir paveldimumo sukurimas
class Zmogus {
    public $ugis = "180cm";
    protected $svoris = "80kg";
    private $pinigai = "500$";
    public function getMoney() {
        return $this->pinigai; // this reikia kad islipti is funkcijos norint paimti private
    }
}
//Moteris paveldi public ir protected zmogaus kintamuosius
class Moteris extends Zmogus {
    public $estrogenai = 3450;
    public function getSvoris() {
        return $this->svoris;
    }
}
class Vyras extends Zmogus {
    public $testosteronas = 9980;
    public function getSvoris() {
        return $this->svoris;
    }
}

$Monika = new Moteris();
$Tadas = new Vyras();

echo "Monikos dienorastis : <br>";
echo $Monika->ugis . " " . $Monika->getSvoris() . " " . $Monika->getMoney() . " " . $Monika->estrogenai;
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

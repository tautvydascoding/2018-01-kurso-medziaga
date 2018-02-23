<?php


// class Zmogus {
//
//
// public function sveikintis() {
//
// echo "Labas";
//
// }
//
// }
//
// class Moteris extends Zmogus {
//
//
//
// }
//
// class Vyras extends Zmogus {
//
//
//
// }
//
// $Martyna = new Moteris();
// $zmogutis = new Zmogus();
// $zmogutis->sveikintis(); // Labas
// $Martyna->sveikintis();  // "Labas", nes paveldint - prieinama prie public ir protected kintamuju ir f-ju




// sukurti dvi klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris: estrogenai
// vyras: testosteronai

// uzduotis: susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju ugi, svori, pinigu skaiciu, hormono skaiciu




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


class Zmogus {

  public $ugis = 150;
  protected $svoris = 90;
  private $pinigai = 10000;
  public function getPinigai() {

    return $this->pinigai; //this nes pinigai yra private (kitam scope), reik islipti is f-jos
  }
}

// paveldimumas - moteris paveldi zmogaus public ir protected
class Moteris  extends Zmogus {

public $estrogenai = 3450;
function getSvoris() {

return $this->svoris;

}
}

class Vyras {

public $testosteronai = 9980;


}

$Monika = new Moteris();
$Tadas = new Vyras();

echo "Monikos dienorastis: <br>";
echo $Monika->ugis . "" . $Monika->getSvoris();
echo $Monika->getPinigai();

<?php
// class Zmogus {
//     public function printItem() {
//         echo "labas";
//     }
// }

// class Moteris extends Zmogus {
    
// }

// class Vyras extends Zmogus {

// }
// $Martyna = new Moteris();
// $zmogutis = new Zmogus();
// $zmogutis-> sveikintis(); //"labas"
// $zmogutis->sveikintis(); // "labas", nes paveldint - prieinama prie "public" ir "protected" kintamuju ir f-ju

//========================================================================================

//1 uzduotis
// sukurti dvi klases: zmogus ir moteris ir vyras
class Zmogus {
    public $ugis = 175; //pasiekiama visiems
    protected $svoris = 70; //prieina tik tie kas paveldi
    private $pinigai = 600;
    public function getPinigai() {
        return $this->pinigai; //this reikia nes reikia islipti is f-jos
    }
    
    // public function piniguIsvedimas () {
    //     echo $pinigai;
    // }
}
//paveldimumas - moteris paveldi visus "Zmogus" kintamuosius
class Moteris extends Zmogus{
    public $estrogenai = 3450;
    public function getSvoris() {
        return $this->svoris;
    }
}

class Vyras extends Zmogus{
    public $testoteronas = 9980;
}

$Monika = new Moteris();
$Tadas = new Vyras();

echo "Monikos dienorastis: <br>";
echo $Monika->ugis . " " . $Monika->getSvoris() . " ";
echo $Monika->getPinigai();
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
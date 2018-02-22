<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

class Zmogus {
    public $name = "Tomas";
    public $ugis = 191;
    private $amzius = 21;


} //klases uzdarymas

$zmogus1 = new Zmogus(); //sukuriamas objektas

echo $zmogus1->name . "<br>"; //Tomas
// echo $zmogus1->amzius; //kadangi amzius privatus prie jo negalime prieiti
$zmogus1->name = "Jurga"; // Tomo vardas pakeistas i Jurga
echo $zmogus1->name . "<br>";

//-------------privaciu kintamuju naudojimas klaseje
class Gyvunas {
    private $kuoMinta = "";
    public $spalva = "";

    public function spausdinu($x) {
        // echo "<br>" . "labas" . "<br>";
        // // echo "<br>" . $spalva . "<br>"; //ERROR $spalva gaunama kaip funkcijos lokalus
        // echo "<br>" . $this->spalva . "<br>";
        // $this->spalva = "balta";
        echo "<br> $x valgo " . $this->kuoMinta . "<br>"; //mesa privatus pasiekiamas visoje klaseje
    }
    //privataus kintamojo paemimas
    public function getKuoMinta() {
        return $this->kuoMinta;
    }
    //pakesiti liuto maisto raciona is isores
    public function setKuoMinta ($x) {
        $this->kuoMinta = $x;
    }
    function __construct($x="", $y="") { /// construct suveikia kiekviena karta panaudojus new
        $this->kuoMinta = $x;
        $this->spalva = $y;
    }
}


$liutas = new Gyvunas();
$liutas->spausdinu('liutas');
$liutas->setKuoMinta('zoleles');

$x = $liutas->getKuoMinta();
echo '<br>liutas valgo: ' . $x . '<br>';



$y = $liutas->getKuoMinta();
echo '<br>liutas valgo: ' . $x . '<br>';


$liutas->spausdinu('Liutas');

$vilkas = new Gyvunas("mesa", "pilkas");
// $vilkas->setKuoMinta('Lape');
$vilkas->spausdinu('Vilkas');
$lape = new Gyvunas("riesutai", "ruda");
// $lape->setKuoMinta('zuiki');
$lape->spausdinu('Lape');
$zuikis = new Gyvunas('pienes', 'balti');
// $zuikis->setKuoMinta('zole');
$zuikis->spausdinu('Zuikis');

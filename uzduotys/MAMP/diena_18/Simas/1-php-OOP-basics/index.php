<?php

class Zmogus {
    public $name = 'tomas';
    public $ugis = '200cm';
    private $amzius = 21;


} //end class Zmogus

// $zmogus1 = new Zmogus(); //sukuriamas objektas
// echo $zmogus1->name; //tomas
// echo $zmogus1->amzius; //Fatal error: Uncaught Error: Cannot access private property //kadangi $amzius yra privatus prie jo negalime prieiti

//kintamojo keitimas
// $zmogus1->name = 'Jurgis';
// echo $zmogus1->name; //jurgis


//==================privaciu kintamuju naudojimas class============
//privaciu keitimas
class Gyvunas {
    private $kuoMinta = '';
    public $spalva = '';
    public function spausdinu () {
        echo " <br> labas <br>";
        // echo $spalva; //ERROR: localus kintamasis
        echo $this->spalva; // pasiekiamas class kintamasis
        $this->spalva='balta'; //ketimas
        echo $this->spalva;//balta
        echo $this->kuoMinta;//mesa, privatus pasiekiamas nes yra tokje pacioje klaseje
    }
    //privataus kintamojo paemimas
    public function getKuoMinta() {
        return $this->kuoMinta;
    }
    //privataus kintamojo keitimas
    public function setKuoMinta($edalas) {
        return $this->kuoMinta=$edalas;
    }
    public function spausdinimas() {
        echo $this->spalva . '<br>'; //class kintamasis todel reikia this
        echo $this->kuoMinta . '<br>';
    }

    function __construct ($i="", $j="") { //__construct suveikia kieviena karta kai yra panaudojamas new
        $this->kuoMinta = $i;
        $this->spalva = $j;
    }
}
// $gyvunas1 = new Gyvunas();
// echo $gyvunas1->spausdinu ();
// // echo $liuts->kuoMinta; //ERROR - nes privatus
// //iseitis
// $x = $gyvunas1->getKuoMinta(); //paimamas private kintamasis //mesa
// echo '<br> lape minta:' . $x . '<br>';

// $y = $gyvunas1->setKuoMinta('zole');
// echo $y;
// $
//uzduotis
//A)sukurti 3 objektu class Gyvunas (vilkas, lape, kiskis)
//b(pakeisti ju visu mityba
$vilkas = new Gyvunas('tomas', 'pilkas');
// $vilkas-> setKuoMinta('lape');
$lape = new Gyvunas('sausi pusryciai', 'balta');
// $lape-> setKuoMinta('kiskis');
$kiskis = new Gyvunas('pienes', 'juoda');
// $kiskis-> setKuoMinta('zole');

$vilkas->spausdinimas();
$lape->spausdinimas();
$kiskis->spausdinimas();

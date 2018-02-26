<?php

//
// class Zmogus {
//
//     public $name = "tomas";
//     public $ugis = "200cm";
//     private $amzius = 21;
//
//
//
//
// }  //end class
//
// $zmogus1 = new Zmogus();        //sukuriam objekta
// echo $zmogus1->name;        //tomas
// // echo $zmogus1->amzius;      //Uncaught Error: Cannot access private property Zmogus::$amzius
//
// $zmogus1->name = "<br> petras";      //keiciam kintamojo reiksmia
//
// echo $zmogus1->name;
//
//

        //--------------kaip paimti privatu kintamaji------------------------
class Gyvunas {
    private $kuoMinta = "mesa";
    public $spalva = "ruda";

    public function spausdinu() {
        // echo $spalva;        error nes lokalus kintamasis
        echo $this->spalva . "<br>";     //pasiekiu class kintamaji
        $this->spalva='balta <br>';

        echo $this->kuoMinta . "<br>";   //mesa, pasieke nes toje pacioje klaseje kvieteme
    }
        public function spausdinuKintamuosius() {
            echo $this->spalva . "<br>";
            echo $this->kuoMinta . "<br>";

        }

        //paemimas privataus
        public function getKuoMinta() {
            return $this->kuoMinta;
        }

        //pakeiciam privataus reiksme
        public function setKuoMinta( $y) {
            $this->kuoMinta = $y;
            return $this->kuoMinta;
        }
            //contruct -- tai funkcija kuri visasda bus iskviesta slapta, kai naudosi "new Gyvunas()"
        function __construct ($x= "", $y= "") {
            $this->kuoMinta = $x;
            $this->spalva = $y;

        }
}
$lape = new Gyvunas();
$lape->spausdinu();

$x = $lape->getKuoMinta();
echo $x . "<br>";

$lape->setKuoMinta( "zoleles");
$x = $lape->getKuoMinta();
echo $x . "<br>";



$vilkas = new Gyvunas("tomas", "pilkas");
$lape = new Gyvunas("riesutai", "melyna");
$kiskis = new Gyvunas("pienes", "juoda");

$vilkas->setKuoMinta("lapiukus");
$lape->setKuoMinta("kiskius");
$kiskis->setKuoMinta("zoleles");


echo "ka valgo vilkas:" . "<br>";
$vilkas->spausdinuKintamuosius();
echo "ka valgo lape:" . "<br>";
$lape->spausdinuKintamuosius();
echo "ka valgo kiskis:";
$kiskis->spausdinuKintamuosius();

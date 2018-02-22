<?php


class Zmogus {
    public $name = "tomas";
    public $ugis = "200cm";
    private $amzius = 21;

} // end class

// new- naujo objekto kurimas
$zmogus1 = new Zmogus();

echo $zmogus1->name;   // tomas
// echo $zmogus1->amzius; //  Error: Cannot access private property Zmogus::$amzius
// kadangi amzius yra privatus, todel jo nagalime paimti

// kintamojo keitimas
$zmogus1->name = 'Jurgis';
echo $zmogus1->name;  // Jurgis


// ------------------------kitamuju naudojism klaseje-------------
// pirvaciu keitimas
class Gyvunas {
    private $kuoMinta = "mesa";
    public $spalva = "rudas";

    public function spausdinu() {
        // echo $spalva; // EROR: localus
        echo $this->spalva; // "ruda"  pasiekiu CLass kintamaji
        $this->spalva = 'balta';
        echo $this->spalva; // "balta"  pasiekiu CLass kintamaji

        echo $this->kuoMinta; // "mesa" , privatus kintamieji pasiekiami visoej Class'eje
    }

    // privataus kintamojo paemimas
    public function getKuoMinta() {
        return $this->kuoMinta;
    }
    // keicia privatu kintamamaji
    public function setMityba( $x ) { // $x - localus isgalvotas naujas laikinas kintamasis
        $this->kuoMinta = $x;
    }
}
$lape = new Gyvunas();
$lape->spausdinu();

// echo "ka lape valgo? ji valgo: " . $lape->kuoMinta; // ERRROR: nes kuoMinta - yra privatus
// iseitis:
$x = $lape->getKuoMinta();
echo "<br> lape minta:" . $x . "<br>";   // "mesa"

// PAKEISTI LAPES MITYBA I "ZOLELES"
// $lape->kuoMinta = "zoleles"; // ERORORE

$lape->setMityba( "zoleles" );
$x = $lape->getKuoMinta();
echo "<br> lape minta:" . $x . "<br>";   // "zoleles"

//

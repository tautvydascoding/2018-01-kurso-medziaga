<?php


class Zmogus {
	
	public $name = "tomas";
	public $ugis = "200cm";
	private $amzius = 21;

} //end class


// susikuriamas naujas objektas
$zmogus1 = new zmogus();

echo $zmogus1->name; //tomas
//echo $zmogus1->amzius; //Fatal error: Uncaught Error: Cannot access private property Zmogus::$amzius, 
//kadangi privatus todel negalim prieiti

//tomo vardo keitimas
$zmogus1->name = "jurgis";
echo $zmogus1->name;

//------kintamuju naudojimas klasej, keitimas privataus

class gyvunas {
	private $kuoMinta = "mesa";
	public $spalva = "ruda";



	public function spausdinu() {
		//echo $spalva; // lokalus kintamasis ERROR
		echo $this->spalva; // taip pasieki visos klases kintamaji
		$this->spalva = "balta"; //pasitikrinimui apacioj spausdini $gyvuniukas->spausdinu();
		echo $this->spalva;

		echo $this->kuoMinta; //spausdinam privatu "mesa", privatu pasieki nes ji toje pacioje klasej 
		// $this->kuoMinta = "vanduo";


	}
	//privataus kintamojo paemimas
	public function getkuoMinta() {
		return $this->kuoMinta;
	}

	//privataus kintamojo keitimas
	public function setMityba($x) { // susigalvotas laikinas kintamasis $x
		$this->kuoMinta = $x;
	}

	public function spausdinuKintamuosius() {
		echo $this->spalva . "<br>"; //public class kintamasis
		echo $this->kuoMinta . "<br>"; // private class kintamasis
	}
	//konstruktorius yra f-ja suveikia kiekviena karta kai jus panaudojate new komanda
	function __construct($x="", $y="") { //default reiksme ="" jeigu nieko nera isves tuscia stringa
		$this->kuoMinta = $x; // nereikai virsuj po klase pradzioj rasyt galima cia apsibrezt
		$this->spalva = $y;
	} 

}

$lape = new gyvunas();
$lape->spausdinu();

//echo "ka lape valgo: " . $lape->kuoMinta(); // ERROR ne skuoMinta - privatus
//iseitis:

$x = $lape->getkuoMinta(); // cia grizta is sito 'return $this->kuoMinta;' t.y. 'mesa'
echo "<br>lape minta:" . $x . "<br>"; // "mesa"

//pakeisti lapes mityba i zolele

//$lape->kuoMinta = "zoleles";

$lape->setMityba("zoleles"); // cia grizta is sito 'return $this->kuoMinta;' t.y. 'mesa'
$x = $lape->getkuoMinta();
echo "<br>lape minta:" . $x . "<br>"; // "mesa"

//--------------

$vilkas = new gyvunas("tomas", "vaivorykste");
$lape = new gyvunas();
$triusis = new gyvunas();

// $vilkas->setMityba("lape");
// $lape->setMityba("triusis");
// $triusis->setMityba("zole");


echo "ka valgo vilkas: ";
$vilkas->spausdinuKintamuosius();
echo "ka valgo lape: ";
$lape->spausdinuKintamuosius();
echo "ka valgo triusis: ";
$triusis->spausdinuKintamuosius();


?>
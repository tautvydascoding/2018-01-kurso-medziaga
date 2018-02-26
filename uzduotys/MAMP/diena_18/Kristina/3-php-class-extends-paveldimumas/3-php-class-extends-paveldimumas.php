<!-- 
// sukurti dvi klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris: estrogenai
// vyras: testosteronai

// uzduotis: susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju ugi, svori, pinigu skaiciu, hormono skaiciu
 -->

<?php

class zmogus {
	public $ugis = 150;
	protected $svoris = 90;
	private $pinigai = 1000;

	public function getPinigai() { // protected kad prieitu tik kas paveldi siuo atveju moteris ir vyras
		return $this->pinigai; // this nes reik islipti is f-jos
	}
}

class moteris extends zmogus {
	public $estrogenai = 3450;
	function getSvoris() {
		return $this->svoris;
	}
}

class vyras  {
	public $testosteronai = 9980;
}

$Monika = new moteris(); // () reikalingi tam kad visa ta recepta issikviestum
$Tadas = new vyras();

echo "Monikos dienorastis: ";
echo $Monika->ugis . " " . $Monika->getSvoris();
echo $Monika->getPinigai();

// $Monika->ugis;

// public function getSvoris() {
// 	return $this->svoris;
// }








?>
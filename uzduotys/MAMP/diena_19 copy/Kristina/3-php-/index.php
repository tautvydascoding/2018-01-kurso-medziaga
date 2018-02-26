<?php

class a {
	private $name = "karolukas"; // NEPAVELDIMAS, niekad negalima isvesti prie b nes jo nemato, reik f-ijos
	public $plaukuSpalva = "ruda";
	protected $sirdiesYda = "oVaTaiTau";

	public function getName() {
		return $this->name;
	} 
}

class b extends a {

		public function getSirdiesYda() {
		return $this->sirdiesYda;
	}
}

$objektas = new b();
echo $objektas->plaukuSpalva;
//echo $objektas->name(); // error nes privatus reik issaukti f-ja a klasej kuri grazina ta f-ija
echo $objektas->getName();
echo $objektas->getSirdiesYda();
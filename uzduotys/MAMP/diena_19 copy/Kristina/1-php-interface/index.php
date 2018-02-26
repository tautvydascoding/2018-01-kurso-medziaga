<?php

interface lifeNeeds {
	public function miegas(); // negali but private.protected
	public function valgymas($kalorijos);
	public function tustintis();
}

class meska implements lifeneeds {
	private $x = 999; // galima det tai tik klase kol yra visi kiti interface
	public function eiti(){  // bus klaida nes eiti f-jos nera lifeNeeds, ir butinos f-ijos neissaukiamos, bet jei visos kitos yra gali buti nes tai tik klase
		//code
	}
	public function tustintis(){
		//code	};
	}
	public function miegas(){ // negali but private.protected
		//code
	}
	public function valgymas($kalorijos) {
		//code
	}
}






?>
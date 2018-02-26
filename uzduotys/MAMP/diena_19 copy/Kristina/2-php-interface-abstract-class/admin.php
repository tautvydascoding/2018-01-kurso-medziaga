<?php

include('./user.php');
include('./edit.php');

class Admin extends User implements Edit { // svarbu sita tvarka
	public function changeName($a) {
		$this->name = $a;
	}
	public function isLogin() {
		
	}
	public function getName() {
		return $this->name;
	}
	public function clearlastLoginTime() {
	}
}

    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
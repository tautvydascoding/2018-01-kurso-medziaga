<?php

abstract class User {
	public $name = "Tomas";
	public $password = "xxx";
	public $createDate = "2017-02";
	public $lastLogin = "2018-02";
	public function logOut() { // privaloma todel neturi abstract zodzio
		//code
	}
	abstract function clearlastLoginTime(); // neprivaloma todel abstract ir neturi {}
}

    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) kuri turi neprivalomus kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) kuri turi neprivalomus kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()


        
abstract class User {
    public $name = "Vardas";
    public $password = "";
    public $createdDate = "Data";
    public $lastLogin = "2018.02.23";
    public function Logout() {

    }
    abstract public function clearlastLoginTime();
}

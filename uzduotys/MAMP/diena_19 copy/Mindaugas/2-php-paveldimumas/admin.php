<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include ('edit.php');
include ('user.php');

// 3) sukurti klase Admin :
    // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)


class Admin extends User implements Edit {
    public function changeName($a) {
        $this->name = $a;

    }
    public function isLogin() {

    }
    public function getName() {
        echo "Vardas: " . $this->name . "<br>";

    }
    public function clearlastLoginTime() {
            $this->lastLogin = "000000";
    }

}

<?php

// uzduotis:
// 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
    // 0) Ar gali tureti kintamuosius????
    // changeName($a)
    // isLogin()
    // getName()
// 2) sukurti (abstrakcia) klase "User" :
    // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
    // A) kuri turi neprivalomus kintamuosius:
        // name, password , createdDate, lastLogin
    // B) privaloma funkcija "Loguot()"
    // C) neprivaloma funkcija clearlastLoginTime()
// 3) sukurti klase Admin :
    // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
include "./edit.php";
include "./user.php";

    class Admin extends User implements Edit{
        public function changeName($a) {
            $this->name=$a;
            return $this->name;
        }
        
        public function getName() {
            return $this->name;
        }
        public function isLogin() {
            if ($this->getName() == "Juozukas") {
                echo "<br> Sveikinu jus prisijungete <br>";
            } else {
                echo "<br> Jums prisijungti nepavyko <br>";
            }
        }
        public function Logout() {

        }
    }

    $Adminas = new Admin();
    echo $Adminas->getName();
    echo $Adminas->changeName('<br>Juozukas');
    $Adminas->changeName('Petriukas');
    $Adminas->isLogin();



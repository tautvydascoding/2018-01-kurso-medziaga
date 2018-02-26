<?php

require_once './includes/edit-interface.php';

require_once './includes/user-class.php';


class Admin extends User implements edit {
    public function clearlastLoginTime() {
        //kodas
    }
    public function changeName($a) {
        $this->name = $a;
    }
    public function isLogin() {
        //kodas
    }
    public function getName() {
        return $this->name;
    }
}

// echo " labas3";

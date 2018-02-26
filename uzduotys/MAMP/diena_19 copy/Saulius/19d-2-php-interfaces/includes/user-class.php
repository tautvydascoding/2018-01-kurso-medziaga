<?php

abstract class User {
    public $name = "Tomas";
    public $password = "xxx";
    public $createdDate = "2017-02";
    public $lastLogin = "2018-02";
    public function Logout() {
        // kodas
    }
    abstract public function clearlastLoginTime();
}

// echo " labas2";

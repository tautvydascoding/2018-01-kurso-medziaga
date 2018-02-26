<?php
    abstract class User {
        public $name = 'Maryte';
        public $password = "xxx";
        public $createdDate = "2017-01-23";
        public $lastLogin = "2018-02-22";
        abstract public function Logout();
        public function clearlastLoginTime() {
            //code
        }
    }
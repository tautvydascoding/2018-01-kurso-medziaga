<?php

abstract class User {
    public $name = "Tomas";
    public $password = "xxx";
    public $createdData = "2017-02";
    public $lastLogin = "2018-02";
    public function LogOut() {
    }
    abstract public function ClearLastLoginTime();
}

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


// uzduotis:
// 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
    // 0) Ar gali tureti kintamuosius????
    // changeName($a)
    // isLogin()
    // getName()

interface Edit {
    public function changeName($a);
    public function isLogin();
    public function getName();
}

<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');


interface lifeNeeds {
    public function miegas();
     function valgymas($kalorijos);
    public function tustintis();

}


class Meska implements lifeNeeds {
    public function eiti() {

    }
    public function miegas(){

    }
    public function valgymas($kaloris){

    }
    public function tustintis(){

    }

}


abstract class Meskos implements lifeNeeds {
    abstract public function eiti();
    public function miegas(){

    }
    public function valgymas($kaloris){

    }
    public function tustintis(){

    }

}

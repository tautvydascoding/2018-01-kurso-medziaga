<?php 

// mokomes interface

interface lifeNeeds
{
    public function miegas();
    public function valgymas($kalorijos);
    public function tustintis();
}

class Meska implements lifeNeeds {
    private $x = 999;
    public function eiti() {
        // code
    }
    public function miegas() {

    }
    public function valgymas($kalorijos){

    }
    public function tustintis(){

    }
}
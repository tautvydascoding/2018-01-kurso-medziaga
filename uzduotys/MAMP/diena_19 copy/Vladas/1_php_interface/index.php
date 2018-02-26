<?php


/**
 *
 */
interface lifeNeeds
{
public function miegas();
public function valgymas($kalorijos);
public function kvepavimas();
}

class Meska implements lifeNeeds {
    public function eiti() {
    }
    public function miegas() {
    }
    public function valgymas($kalorijos) {
    }
    public function kvepavimas() {
    }
}

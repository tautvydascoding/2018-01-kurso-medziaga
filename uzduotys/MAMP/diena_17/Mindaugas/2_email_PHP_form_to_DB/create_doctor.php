<?php

require_once('libs/hospital1_DB.php');

print_r($_GET); //Array ( [vardas] => Tomas [pavarde] => Tomelis )
// libs/hospital1_DB.php
$vardenis = $_GET['vardas'];  //jei parasai lygu ['vardas'] tai sukuriamas masyvas...taip nedaryti
$pavardenis = $_GET['pavarde'];



createDoctor($vardenis, $pavardenis);

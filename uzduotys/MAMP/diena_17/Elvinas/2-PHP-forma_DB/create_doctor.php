<?php


require_once('./libs/doctorsDB.php');

print_r($_GET);


$vardenis = $_GET['vardas'];
$pavardenis = $_GET['pavarde'];


createDoctor($vardenis, $pavardenis);

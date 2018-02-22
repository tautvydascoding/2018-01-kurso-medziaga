<?php require_once('./libs/doctorsDB.php');

$nr = $_GET['numeris']; //globalus masyvas
// print_r($_GET);
deleteDoctor($nr);
echo "Gydytojas istrintas";

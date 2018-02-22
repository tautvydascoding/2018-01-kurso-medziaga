<?php
require_once('./libs/doctors_db.php');



$nr = $_GET['numeris']; // globalus masyvas
// print_r($_GET);
deleteDoctor($nr);

echo "gydytojas istrintas sekmingai";









?>
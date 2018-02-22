<?php
require_once('./libs/doctors_db.php'); echo "<br>";

$nr = $_GET['numeris'];
// print_r( $_GET);
// http://localhost/diena_16/Vladas/php_database_praktika/?trinti=true&numeris=5    
deleteDoctor( $nr );
echo "Gydytojas istrintas" . "<br>";






 ?>

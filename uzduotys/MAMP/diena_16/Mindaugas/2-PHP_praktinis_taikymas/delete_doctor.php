<?php




    include('./libs/hospital1_DB.php'); echo "<br>";
    $nr = $_GET['numeris']; //http://localhost/diena_16/Mindaugas/2-PHP_praktinis_taikymas/?numeris=2
    print_r($_GET);
    deleteDoctor($nr);
    echo "Gydytojas istrintas sekmingai";





 ?>

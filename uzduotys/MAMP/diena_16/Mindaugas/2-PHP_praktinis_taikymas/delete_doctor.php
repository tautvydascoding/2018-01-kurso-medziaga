<?php




    include('./libs/hospital1_DB.php'); echo "<br>";
    $nr = $_GET['numeris'];
    print_r($_GET);
    deleteDoctor($nr);
    echo "Gydytojas istrintas sekmingai";





 ?>

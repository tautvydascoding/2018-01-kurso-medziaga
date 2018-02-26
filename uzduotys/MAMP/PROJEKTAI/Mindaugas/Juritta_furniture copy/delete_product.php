<?php

    require_once('sql_functions.php'); echo "<br>";

     $id =  $_GET['numeris']; // globalus masyvas
    // print_r( $_GET );

    deletePItem( $id );
    echo "Gydytojas istrintas sekmingai <br>";

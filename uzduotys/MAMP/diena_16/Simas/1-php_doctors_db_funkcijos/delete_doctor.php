<?php

    require_once ("./libs/doctors_db.php");
    $nr = $_GET['numeris'];
    deleteDoctor( $nr );
    echo "Gydytojas istrintas";
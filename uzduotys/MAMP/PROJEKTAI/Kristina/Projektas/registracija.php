<?php

require_once('libs/db_config.php');

// print_r($_POST);

        $vardas = $_POST['reg_vardas'];
        $slaptazodis = $_POST['reg_slaptazodis'];
        $elpastas = $_POST['reg_elpastas'];

createNarys($vardas, $slaptazodis, $elpastas);


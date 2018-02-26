<?php

require_once('libs/db_config.php');

        $vardas = $_POST['vardas'];
        $komentaras = $_POST['komentaras'];

createKomentaras($vardas, $komentaras);


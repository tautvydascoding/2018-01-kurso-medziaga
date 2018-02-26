<?php

    require_once('sql_functions.php'); echo "<br>";
    $id = $_POST['id'];
     $name =  $_POST['name']; // globalus masyvas
     $img_path =  $_POST['img_path']; // globalus masyvas
     $description =  $_POST['description']; // globalus masyvas
     $type_order =  $_POST['type_order']; // globalus masyvas
     // $action = $_POST['action'];
    // print_r( $_GET );

    updatePItem($id, $name, $img_path, $description, $type_order);
    echo "Objektas sukurtas sekmingai <br>";
     // updatePItem($id, $pavadinimas, $img_path, $description, $type_for_order);

<?php

    require_once('sql_functions.php'); echo "<br>";
    $id = $_POST['id'];
     $menuItem =  $_POST['menu_item']; // globalus masyvas
     // $img_path =  $_POST['img_path']; // globalus masyvas
     // $description =  $_POST['description']; // globalus masyvas
     // $type_order =  $_POST['type_order']; // globalus masyvas
     // $action = $_POST['action'];
    // print_r( $_GET );

    updateMItem($id, $menuItem);
    echo "Objektas sukurtas sekmingai <br>";
     // updatePItem($id, $pavadinimas, $img_path, $description, $type_for_order);

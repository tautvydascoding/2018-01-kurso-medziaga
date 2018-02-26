<?php

    require_once('sql_functions.php'); echo "<br>";

     $name =  $_POST['name']; // globalus masyvas
     $img_path =  $_POST['img_path']; // globalus masyvas
     $description =  $_POST['description']; // globalus masyvas
     $type_order =  $_POST['type_order']; // globalus masyvas
     // $action = $_POST['action'];
    // print_r( $_GET );

    createPItem($name, $img_path, $description, $type_order);
    echo "Objektas sukurtas sekmingai <br>";

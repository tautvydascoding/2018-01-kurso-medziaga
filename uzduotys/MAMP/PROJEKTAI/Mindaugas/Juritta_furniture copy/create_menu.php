<?php

    require_once('sql_functions.php'); echo "<br>";

     $menuItem =  $_POST['menu_item']; // globalus masyvas
    
     // $action = $_POST['action'];
    // print_r( $_GET );

    createMItem($menuItem);
    echo "Objektas sukurtas sekmingai <br>";

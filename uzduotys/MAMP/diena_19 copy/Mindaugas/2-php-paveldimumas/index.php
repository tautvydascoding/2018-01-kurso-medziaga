<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');


include ('admin.php');




        /**
         *
         */





    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)




        $administratorius = new Admin();
        $administratorius->getName();
        $administratorius->changeName('Jurga');
        $administratorius->getName();
        $administratorius->changeName('Petras');
        $administratorius->getName();
        $administratorius->changeName('Birute');
        $administratorius->getName();

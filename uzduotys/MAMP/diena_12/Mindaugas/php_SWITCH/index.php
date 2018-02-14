<?php
require_once("./head.php");

 ?>
        <?php

        define('PASSWORD', 'HHGFSldkdn.');  //konstantu kurimas
        echo PASSWORD . "<br>";

        ?>

        <?php



         ?>



<?php
require_once('./footer.php');

 ?>

 <?php

 $vardas = "opel";

//paduoti varda ir jeigu jis lygus "audi" - atspausdinti "Susimastykite apie variklio prieziura!"
//paduoti varda ir jeigu jis lygus "BMW" - atspausdinti "Susimastykite apie saugu eisma!"
//paduoti varda ir jeigu jis lygus "opel" - atspausdinti "Susimastykite apie naujus priedus!"

 switch ($vardas) {
     case 'audi':
        echo "Susimastykite apie variklio prieziura!";
        echo "<br>";
         break;

     case 'BMW':
        echo "Susimastykite apie saugu eisma!";
        echo "<br>";
         break;
     case 'opel':
        echo "Susimastykite apie naujus priedus!";
        echo "<br>";
         break;
         default:
            echo "Mes tave stebime";
        break;



 }

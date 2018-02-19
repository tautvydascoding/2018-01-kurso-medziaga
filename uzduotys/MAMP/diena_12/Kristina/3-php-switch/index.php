<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo "mokysimes php"; ?> </title>

    </head>
    <body>

        <h1>Isijunk konsole</h1>

    </body>
</html>

<?php

$vardas = "opel";

//UZDUOTIS
// paduoti varda ir jeiu jis lygus: 
// "audi" - atspausdinti "susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "susimastykite apie naujus priedus"

switch ($vardas) { // tikrina is eiles

    case "audi":
        echo "susimastykite apie variklio prieziura";
        echo "<br>";
    break;

    case "BMW":
        echo "susimastykite apie greiti ir vairavimo kultura";
        echo "<br>";
    break;

    case "opel":
        echo "susimastykite apie naujus priedus";
        echo "<br>";
    break;

    default: // jeigu nieko neranda ismeta kazka
        echo "nurodytos masinos neturim";
        echo "<br>";
    break;
}
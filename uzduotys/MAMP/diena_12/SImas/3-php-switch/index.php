<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    $vardas = "opel";

    //UZDUOTIS
    //paduoti varda ir jeigujis lygus:
    // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
    // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
    // "opel" - atspausdinti "Susimastykite apie naujus priedus"

    switch ($vardas) {
        case 'audi':
            echo "Susimastykite apie variklio prieziura";
            echo "<br>";
            break;

        case 'BMW':
            echo "Susimastykite apie greiti ir vairavimo kultura";
            break;

        case 'opel':
            echo "Susimastykite apie naujus priedus";
            break;

        default: //tas pats kas else, jis gali buti ir virsuje, tas nieko nekeicia
            echo "Neturime nurodyto automobilio";
            break;
    }



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo "Mokysimes switch"; ?> </title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="./css/main.css">
        <!-- NOTE: jeigu neveikia:
            1) ar failo pavadinimas geras
            2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
            3) ar   rel="stylesheet"
            4) ar link uzdalete ">"
         -->
    </head>
    <body>

        <h1>Isijunk konsole</h1>

<?php


// UZDUOTIS
// paduoti varda ir jeigu jis lygus "Audi" - atspauzdinti "Neciaudi isedi ir spaudi"
// paduoti varda ir jeigu jis lygus "BMW" - atspauzdinti "Saugokis stoteles"
// paduoti varda ir jeigu jis lygus "Opel" - atspauzdinti "Susimastykite apie rudis"
// paduoti varda ir jeigu jis lygus "Honda" - atspauzdinti "Honda zjbs"

$vardas = "BMW";
switch ($vardas) {
    case 'Audi':
        echo "Neciaudi isedi ir spaudi";
        echo "<br>";
        break;
    case 'BMW':
        echo "Saugokis stoteles";
        echo "<br>";
        break;
    case 'Opel':
        echo "Susimastykite apie rudis";
        echo "<br>";
        break;
    case 'Honda':
        echo "Honda zjbs";
        echo "<br>";
        break;
    default:
        echo "Arba Quattro arba ne masina";
        echo "<br>";
        break;
}


 ?>


        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

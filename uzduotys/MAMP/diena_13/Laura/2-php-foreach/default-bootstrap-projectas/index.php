<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

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

//masyva atsispausdinsime naudodami FOREACH cikla ---
$visi_vardai = ['Tomas', 'Antanas', 'Jurgis', 'Karolis'];

foreach ($visi_vardai  as  $vienasIsVardu) {   ///isigalvotas kintamasis kuris bus lygus [0], poto [1] stalciui, po to [2]..
    echo $vienasIsVardu . "<br />";
}


//matricos
$visos_pavardes = [];
$visos_pavardes[0] = ['Tomas', 'Antanas', 'Jurgis', 'Karolis'];
$visos_pavardes[1] = ['Tomantas', 'Antanas', 'Jurgis', 'Karolis'];

foreach ($visos_pavardes  as  $stalciausInfo) { /// stalciaus info -issigalvotas - bus lygus vardu masyvui, po to bus lygus-pavardziu masyvui;
    echo $stalciausInfo[0]. "<br />";  //atspausdins tik 0 varda ir pavarde;

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

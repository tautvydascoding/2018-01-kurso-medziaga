<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <!-- !!! mano CSS failas visada patsa zemiausias -->
        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body>
         <div class="container">

        <<?php
            $visi_vardai = ['Tomas', 'Martynas', 'Andrius', 'Antanas'];

            foreach ($visi_vardai as $vienasVardas) { //issigalvotas kintamasis kuris bus lygus 0 stalciui 1 stalciui ir t.t.
                echo $vienasVardas . "<br>";

            }
            $vardasPavarde = [];
            $vardasPavarde[0] = ['Tomas', 'Martynas', 'Andrius', 'Antanas'];
            $vardasPavarde[1] = ['Tomas', 'Martynas', 'Andrius', 'Antanas'];

            foreach ($vardasPavarde as $stalciausInfo) { //issigalvotas kintamasis kuris bus lygus 0 stalciui 1 stalciui ir t.t.
                echo $stalciausInfo[0] . $stalciausInfo[1] . "<br>";

            }


         ?>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <!-- !!! mano javaScript visada failo apacioje ir pats apatinis -->
         <script src="./js/main.js">
              // komentaras   var y;
             // progrtamuoju
             /*
                komentaras
            */

         </script>
    </body>
</html>

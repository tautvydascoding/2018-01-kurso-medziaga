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

            <h1>Isijunkite Konsole</h1>

            <?php
                echo "<h2>Antraste</h2>";
                print("antra antraste");

                $name = "Tomas";  // string
                $age = 21;        // number  (integer)
                $arVedes = true;   // boolean
                $kadaMirsiu = NULL;
                // nera undefined


                echo "Labas $name <br>";
                echo 'Labas $name <br>';
                echo "Labas  he's <br>";
                echo 'Labas  he\'\'\'s <br>';


                $name = "labas" . " karoli     " . $age . "  Polikai";
                echo $name;


            ?>

         <!-- end container -->
         </div>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <!-- !!! mano javaScript visada failo apacioje ir pats apatinis -->
         <script src="./js/main.js"></script>
              // komentaras   var y;
             // progrtamuoju
             /*
                komentaras
            */
             <script>
            masyvas = [1, 55, 999];
            sarasas = masyvas.slice(0);

            console.log(masyvas);
            console.log(sarasas);

            masyvas[0] = "petras";

            console.log(masyvas);
            console.log(sarasas);

              $('<h6>aa</h6>').text('pakeiciua');

         </script>
    </body>
</html>

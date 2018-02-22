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

<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
        <h1>Isijunk konsole</h1>


        <?php

        // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)

        $menu = ["home", "about", "gallery", "contacts", "blog"];
        // print_r( $menu );                Paziuret ar veikia masyvas!!!!!!
        ?>

        <!-- <nav >
            <ul class="nav navbar">
                <li class="nav-item">  <?php  echo $menu[0]; ?> </li>
                <li class="nav-item">  <?php  echo $menu[1]; ?> </li>
                <li class="nav-item">  <?php  echo $menu[2]; ?> </li>
                <li class="nav-item">  <?php  echo $menu[3]; ?> </li>
                <li class="nav-item">  <?php  echo $menu[4]; ?> </li>
            </ul>
        </nav> -->

<!-- tas pats su cikl for -->

<nav >
    <ul class="nav navbar">
        <?php
        for ($i=0; $i < count( $menu ) ; $i++) {
            echo "<li class='nav-item'>";
                echo $menu[ $i ];
            echo '</li>';
        }
         ?>


         <!-- <li class="nav-item">  <?php  echo $menu[$i]; ?> </li> -->

    </ul>
</nav>




        <!-- // uzduotis 2
        // A. susirasti 6 nuotraukas
        // B. susikurti nuotrauku pavadinimu masyva
        // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
        // <img src='./img/1.jpg' alt=''  /> -->

<?php
        $manoFoto = ["1.jpg", "2.jpg", "3.jpg", "4.jpg"];


            for ($i=0; $i < count ($manoFoto) ; $i++) {
                echo "<img src='./images/$manoFoto[$i]' alt=''>";
                if ( ($i+1) % 3 === 0) {
                    echo "<br>";

                }


                // echo "<img src='./images/2.jpg' alt=''>";
                // echo "<img src='./images/3.jpg' alt=''>";
                // echo "<img src='./images/4.jpg' alt=''>";

            }










 ?>

        <?php






        // uzduotis 3
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        //  Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)

$visosPrekes = [];
$visosPrekes[0] = ["diratis", "1.jpg", "ilore eu fugiat nulla pariatur. Excepteurorum", 99.99 ];
$visosPrekes[1] = ["masina", "2.jpg",  "it ae eu fugiat nulla pariatur. Excepteur sim", 150];
$visosPrekes[2] = ["rieduciai", "3.jpg",  "itore eu fugiat nulla pariatur. Excepteur rum", 15];
$visosPrekes[3] = ["saldytuvas", "4.jpg",  "olore eu fugiat nulla pariatur. Excepteborum", 33];
// print_r( $visosPrekes);
?>
<main class="container">
    <section class="row">
        <?php
for ($i=0; $i < count($visosPrekes); $i++) {
    // echo $visosPrekes[$i][0] . "<br>"; ?>


        <article class="col-3  bg-info card">
            <h2><?php echo $visosPrekes[$i][0];?></h2>
            <img src="./images/<?php echo $visosPrekes[$i][1];?>" alt="">
            <p><?php echo $visosPrekes[$i][2]; ?></p>
            <a href="#" class="btn btn-lg btn-warning"><?php echo $visosPrekes[$i][3]; ?></a>
        </article>


        <?php
}
?>

</section>
</main>

    <?php









           // 3 budai
            // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
            // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);




            ?>

                <!-- foreach ciklas !!!!!!!!!!!!!!!! -->
            <?php
            $vardai = ["tomas", "antanas", "jurgis", "martynas"];

            foreach ($vardai as $vardas) {
                echo $vardas . "<br>";

            }
                    // su matricom
            $pavardes = [ ];
            $pavardes[0] = ["tomas", "antanas", "jurgis", "martynas"];
            $pavardes[1] = ["tomauskas", "petras", "jurgilas", "petrauskas"];

            foreach ($pavardes as $x) {
                echo $x[0] . "<br>";

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

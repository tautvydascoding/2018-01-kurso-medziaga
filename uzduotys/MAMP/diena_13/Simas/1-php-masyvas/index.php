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

        // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        $namoMenu = ["home", "about", "gallery", "contact", "blog"];
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
        // print_r($namoMenu);
        ?>
        <nav>
            <ul class="nav navbar">
                <li class="nav-item">
                    <?php echo $namoMenu[0]?>
                </li>
                <li class="nav-item">
                    <?php echo $namoMenu[1]?>
                </li>
                <li class="nav-item">
                    <?php echo $namoMenu[2]?>
                </li>
                <li class="nav-item">
                    <?php echo $namoMenu[3]?>
                </li>
                <li class="nav-item">
                    <?php echo $namoMenu[4]?>
                </li>
            </ul>
        </nav>

        <!-- ===menu su FOR -->

        <nav>
            <ul class="nav navbar">
                <?php
                    for ($i=0; $i < count( $namoMenu ); $i++) { 
                        echo "<li class='nav-item'>";
                            echo $namoMenu[$i];
                        echo "</li>";
                    }
                ?>         
            </ul>
        </nav>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non nemo magnam culpa modi nobis dicta, vitae perspiciatis minima error harum fuga aut hic, odio quibusdam placeat cum quos illo excepturi.

        <!-- 2 uzduotis -->
        <?php
            $nuotraukos = ["1.jpg", "2.jpg", "3.png", "4.jpg"];

            for ($i=0; $i < count($nuotraukos); $i++) { 
                echo "<img src='./img/" . $nuotraukos[$i] .  "' alt=''  />";
                if (($i + 1) % 3 === 0) {
                    echo "<br>";
                }
                
            }
        ?> 
            <br>
        <!-- 3 uzduotis -->
        <main class="container">
            <div class="row">
        <?php
            $prekes = [];
            $prekes[0] = ["dviratis", "1.jpg", 99.99, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non nemo magnam culpa modi nobis dicta, vitae perspiciatis minima error harum fuga aut hic, odio quibusdam placeat cum quos illo excepturi."];
            $prekes[1] = ["paspirtukas", "2.jpg", 200, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non nemo magnam culpa modi nobis dicta, vitae perspiciatis minima error harum fuga aut hic, odio quibusdam placeat cum quos illo excepturi."];
            $prekes[2] = ["rieduciai", "3.png", 70, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non nemo magnam culpa modi nobis dicta, vitae perspiciatis minima error harum fuga aut hic, odio quibusdam placeat cum quos illo excepturi."];
            $prekes[3] = ["riedlente", "4.jpg", 30, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non nemo magnam culpa modi nobis dicta, vitae perspiciatis minima error harum fuga aut hic, odio quibusdam placeat cum quos illo excepturi."];
            
            for ($i=0; $i < count($prekes); $i++) { 
                ?>
                <!-- visas HTML veikia for cikle -->
                <article class="col-6 bg-info">
                    <h2><?php 
                        echo $prekes[$i][0];
                    ?></h2>
                    <img src="./img/<?php 
                        echo $prekes[$i][1];
                    ?>" alt="">
                    <p> 
                    <?php echo $prekes[$i][3];?>
                    </p>
                    <a href="" class="btn btn-lg btn-warning"><?php echo $prekes[$i][2];?> </a>
                </article>
                <!-- end visas HTML veikia for cikle -->
                <?php
            }
        ?> 
        </div>
        </main>


        <!-- // uzduotis 2
        // A. susirasti 6 nuotraukas
        
        // B. susikurti nuotrauku pavadinimu masyva
        // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
        //1 pasitestinti ar HTML img veikia
        // <img src='./img/1.jpg' alt=''  />

        // uzduotis 3
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        //  Antraste, img pavadinimas, prekes kaina, aprasymas, 
        // A. sukurti masyva preke: Antraste, img pavadinimas, kaina,prekes aprasymas, 
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)


        // 3 budai
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->

        




        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>


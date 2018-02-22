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
// B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
$manoMenu = ['Home', 'About', 'Gallery', 'Contacts', 'Blog'];
//sukuriam masyva, su reiksmemis stalciuose
// print_r($manoMenu);
// print_r eina per masyva ir atspauzdina visus jo stalcius. atspauzdina negraziai, skirta tik pasitikrint programuojant
?>

<!-- <nav>
    <ul class="nav navbar">
        <li class="nav-item"><?php echo $manoMenu[0]; ?></li>
        <li class="nav-item"><?php echo $manoMenu[1]; ?></li>
        <li class="nav-item"><?php echo $manoMenu[2]; ?></li>
        <li class="nav-item"><?php echo $manoMenu[3]; ?></li>
        <li class="nav-item"><?php echo $manoMenu[4]; ?></li>
    </ul>
</nav> -->

<!-- ===========================menu su for================================ -->



<nav>
    <ul class="nav navbar">
        <?php
        for ($i=0; $i < count($manoMenu); $i++) {
            // echo "<li class=\"nav-item\">";
            // echo $manoMenu;
            // echo "</li>";
            //arba
            echo "<li class=\"nav-item\">" . $manoMenu[$i] . "</li>";
        }
         ?>
     </ul>
</nav>

<!-- <img src="./img/1.jpg" alt=""> -->

<?php
// uzduotis 2
// A. susirasti 6 nuotraukas
// B. susikurti nuotrauku pavadinimu masyva
// C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
// <img src='./img/1.jpg' alt=''  />
$manoFoto = ["1.jpg", "2.jpg", "3.jpg", "4.jpg"];
for ($i=0; $i < count($manoFoto); $i++) {
    echo "<img src='./img/" . $manoFoto[$i] . "'>";
    if (($i + 1) % 3 === 0) { // +1 prie i uzsiraso kad po pirmos foto iskart nepermestu br
        echo "<br>";
    }
}

// uzduotis 3
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
//  Antraste, img pavadinimas, prekes aprasymas, kaina
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)

//sprendimas
$prekes = [];
$prekes[0] = ["Dviratis", "1.jpg", 99.99, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."];
//print_r($prekes); // pasitikrinm ar isirase
$prekes[1] = ["Masina", "2.jpg", 3000, "consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."];
$prekes[2] = ["Bulviu tarka", "3.jpg", 50, "ipsum dolor sit amet, consectetur adipisicing elit"];
$prekes[3] = ["Alus", "4.jpg", 2, "consectetur adipisicing elit"];
$prekes[4] = ["Svarke", "1.jpg", 150, "ipsum dolor sit amet"];

echo "<section class=\"row\">";





for ($i=0, $j=0; $i < count($prekes); $i++) {
    // echo $prekes[$i][$j] . "<br>";
    // echo $prekes[$i][2] . "<br>";
    ?>
<article class="card col-2 bg-success mb-2">
    <h2 class="card-title"><?php echo $prekes[$i][0] ?></h2>
    <img class="card-img-top" src="./img/<?php echo $prekes[$i][1] ?>" alt="">
    <p class="card-text"><?php echo $prekes[$i][3] ?></p>
    <a href="#" class="btn btn-md bg-warning"> <?php echo $prekes[$i][2] ?> </a>

</article>


<?php
}
echo "</section>";



   // <!-- // 3 budai
   //  // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
   //  // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->















?>






















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

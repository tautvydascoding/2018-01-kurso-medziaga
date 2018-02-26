<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Giraitės transportas</title>

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

    <body class="bg" background="images/road1.jpg">
        <header class="container-fluid  navitop">
            <a class="navbar-brand" href="">
              <img src="images/auto.png" class="logo" alt="">
            </a>
            <p class="gira">Giraitės transportas</p>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Pagrindinis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Apie mus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact us.php">Susisiekite us mumis</a>
                    </li>
                </ul>
            </nav>
        </header>
        <br>
        <br>

        <aside class="container-fluid contacts">


        <div class="row">
            <div class="col-6 contact">
                <h3>Kontaktai:</h3> <br>
    <h4>Adresas:</h4> Kaštonų g. 21, Giraitė LT-54309; <br>
    <br>
    Direktorius Virgilijus Mišeika, Tel. Nr. -869927348;<br>
    <br>
    Dir. pavaduotoja Virginija Šablevičienė, Tel. Nr. - 867575998; <br>
    <br>
<!--
    <?php
        $vard = $_GET['vardas'];
        $klaus = $_GET['klausimas'];
        $elmail = $_GET['e-mail'];

        echo $vard . $klaus . $elmail;


        // print_r( $_GET);
     ?> -->

            </div>
            <form action="e_mail_send.php" method="get" class="col-6 forma" enctype="text/plain">
                <h3>Susisiekite su mumis</h3> <br>
                <input type="text" name="vardas" placeholder="Jūsų vardas" class="vardas" value="<?php echo $vard; ?>" maxlength="40" required> <br>
                <br>
                <input type="email" name="e-mail" placeholder="Elektroninis paštas" class="epastas" value="" required> <br>
                <br>
                <textarea type="text" name="klausimas" class="ask" rows="7" placeholder="Jūsų klausimas" cols="80" required></textarea> <br>
                <br>
                <button type="submit" class="mygtukas" name="button" method="post" value="Jūsų laiškas sėkmingai išsiūstas!"><strong>Siūsti</strong></button>
                <br>
            </form>

        </div>
        <div class="row map">
            <div class="col mt-20">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.214026104312!2d23.865753415636327!3d54.951806380346795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e71f1bf111c141%3A0xcdd9149a0da49fc2!2zS2HFoXRvbsWzIGcuIDIxLCBHaXJhaXTElyA1NDMwOQ!5e0!3m2!1slt!2slt!4v1519560982885" width="800" height="450" frameborder="4" style="border:solid" allowfullscreen></iframe>
            </div>

        </div>

        </aside>





        <footer class="container-fluid  navi">
            <nav class="navbar navbar-expand-lg navbar-dark ">
              <a class="navbar-brand" href="#">
                <img src="images/auto.png" class="logo2" alt="">
              </a>

                <ul class="navbar-nav apacioje">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Pagrindinis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">Apie mus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact us.php">Susisiekite su mumis</a>
                    </li>
                </ul>
            </nav>
        </footer>






        <!-- js puslapio apacioje -->

        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

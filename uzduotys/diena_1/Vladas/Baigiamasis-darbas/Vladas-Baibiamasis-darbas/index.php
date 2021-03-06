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
            <a class="navbar-brand" href="#">
              <img src="images/auto.png" class="logo" alt="">
            </a>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Pagrindinis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Apie mus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact us.php">Susisiekite su mumis</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="container-fluid">
            <div class="row">
                <div class="col-3 pav">
                    <div class="row">
                        <a>
                            <img src="images/fon.jpg" class="fone" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <a>
                            <img src="images/fon1.jpg" class="fone1" alt="">
                        </a>
                    </div>

                </div>
                <div class="col-6 home">
                    <article class="pagrindinis">
                        <h1>Sveiki</h1>
                        Esame ambicinga, sparčiai besivystanti transporto paslaugų ir logistikos įmonė. Siekianti aukšto lygio aptarnavimo. Turinti gerą vardą, užtarnautą klientų ir partnerių pasitikėjimą savo sąžiningais ir kokybiškais darbais. Norėtume Jums pasiūlyti savo paslaugas. <br>
•                Krovinių gabenimas po Lietuvą ir Europą; <br>
•                Disponuojame tentinėmis mašinomis; <br>
•                Kontroliuojame krovinio gabenimo procesą, todėl galime pateikti tikslią, operatyvią informaciją apie krovinio judėjimą; <br>
•                Krovinių saugus ir kokybiškas sandėliavimas, perkrovimo darbai; <br>
•                Ekspedijavimas.
                    </article>
                </div>
                <div class="col-3 pav">
                    <div class="row">
                        <a>
                            <img src="images/fon2.jpg" class="fone2" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <a>
                            <img src="images/fon3.jpg" class="fone1" alt="">
                        </a>
                    </div>
                </div>
            </div>



        </main>

        <footer class="container-fluid  navi">
            <nav class="navbar navbar-expand-lg navbar-light ">
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

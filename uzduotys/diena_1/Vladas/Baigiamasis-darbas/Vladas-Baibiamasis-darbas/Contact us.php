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
                        <a class="nav-link" href="contact us.php">Susisiekite us mumis</a>
                    </li>
                </ul>
            </nav>
        </header>

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

            </div>
            <form action="mailto:bolldds@gmail.com" method="post" class="col-6 forma" enctype="text/plain">
                <h3>Susisiekite su mumis</h3> <br>
                <input type="text" name="vardas" placeholder="Jūsų vardas" class="vardas" value="" required> <br>
                <br>
                <input type="email" name="e-mail" placeholder="Elektroninis paštas" class="epastas" value="" required> <br>
                <br>
                <input type="text" name="klausimas" placeholder="Jūsų klausimas" class="ask" value="" required> <br>
                <br>
                <button type="submit" class="bg-primary mygtukas" name="button" method="post" value="Jūsų laiškas sėkmingai išsiūstas!">Siūsti</button>
                <br>
            </form>

        </div>
        <div class="row map">
            <div class="col-8 mt-20">
                <div id="map" style="width:700px;height:400px"></div>
            </div>

        </div>

        </aside>





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
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

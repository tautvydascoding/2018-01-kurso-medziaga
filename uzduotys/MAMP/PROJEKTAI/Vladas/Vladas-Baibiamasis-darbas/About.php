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
         <a href="https://icons8.com"></a>
    </head>

    <body class="bg" background="images/road1.jpg">

        <header id="navigacija" class="container-fluid  navitop">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#">
                <img src="images/auto.png" class="logo" alt="">
              </a>
              <p class="gira">Giraitės transportas</p>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Pagrindinis <span class="sr-only">(current)</span></a>
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

        <article class=" container-fluid main">
            <br>
            <h1 class="apie color-danger">Apie mus</h1>
            <div class="row">
                <p class="col">
                    Lorem ipsum dolor sit amet, consectetur adipisicing. Add your <br> email address and receive an email every Friday covering off everything worth knowing about building your websites responsively.
                </p>
            </div>
            <div class="row">
                <p class="col">
                     but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.
                     utorials, references, and examples are.
                </p>
            </div>
            <div class="row">
                <p class="col">
                    Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are.
                    thank you very much for this very helpfull article
but the input is not sanitized,
so if i put special characters in it it breaks the code.
                </p>
            </div>
            <div class="row seip">
                <p class="pv ml-5">
                    <img src="images/6.jpg" alt="">
                </p>
                <p class="pv ml-5">
                    <img src="images/7.jpg" alt="">
                </p>
                <p class="pv ml-5">
                    <img src="images/8.jpg" alt="">
                </p>
                <p class="pv ml-5">
                    <img src="images/9.jpg" alt="">
                </p>
            </div>









        </article>







        <footer class="container-fluid  navi">
            <nav class="navbar navbar-expand-lg navbar-dark ">
              <a class="navbar-brand" href="#">
                <img src="images/auto.png" class="logo2" alt="">
              </a>

                <ul class="navbar-nav apacioje">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Pagrindinis <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">Apie mus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact us.php">Susisiekitesu mumis</a>
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

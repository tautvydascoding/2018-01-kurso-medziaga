<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css"> -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&amp;subset=latin-ext"
            rel="stylesheet">


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
        <header class="row fixed-top bg-white font1">
            <section class="col-md-2 col-4 d-flex align-items-center padding-left"><!-- logo -->
                <div class="d-flex flex-row ml-auto mr-auto">
                    <h3 class="margin-t-10">DovydasFitt</h3>
                </div>
            </section><!-- end logo -->

            <section class="col-md-8 col-4">
                <!-- navbar -->
                <nav class="d-flex justify-content-around navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler w-100" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-angle-double-down"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-pills nav-fill navbar-nav ml-auto mr-auto">
                            <li class="nav-item ml-4 mr-4">
                                <a class="nav-link" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item ml-4 mr-4">
                                <a class="nav-link" href="./coaching.php">Coaching</a>
                            </li>
                            <li class="nav-item ml-4 mr-4">
                                <a class="nav-link" href="./contacts.php">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </section>
            <!-- end navbar -->
            <section class="col-md-2 col-4 d-flex align-items-center"><!-- social -->
                <div class="d-flex flex-row ml-auto mr-auto">
                    <a href="https://www.instagram.com/dovyfitt_pt/" class="nav-link" target="_blank">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.facebook.com/dovyfitt" class="nav-link" target="_blank">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="./sign_in.php" class="nav-link">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </div>
            </section>
            <!-- end social -->
        </header>
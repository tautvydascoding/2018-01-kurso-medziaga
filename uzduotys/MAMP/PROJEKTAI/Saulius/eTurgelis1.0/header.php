<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>E-turgelis - nemokami skelbimai</title>

    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body class="bg-image">


    <!-- Nav cont -->
    <div class="container mt-2 sviesus">
        <nav class="navbar nav-transparent navbar-expand-md navbar-dark">

            <!-- Logo -->
            <a class="navbar-brand" href="./index.php">
                <img class="logo" alt="logotipas" src="./img/warehouse.png">
            </a>
            <!-- Logo end -->

            <!-- Name -->
            <div class="pavadinimas  d-flex align-self-center">
                <span class="pulse">eTurgelis</span>
            </div>
            <!-- Name end -->

            <!-- Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="input-group-collapse justify-content-center" id="mm">
                    <a class="btn button6"  href="./skelbimas-add-new.php" role="button" id="margumynas">Įdėk skelbimą!</a>
                    <a class="btn button6 mx-lg-1" href="apie-mus.php" role="button">Apie mus</a>
                    <a class="btn button6" href="./duk.php" role="button">D.U.K.</a>
                </div>
            </div>
            <!-- Menu end -->
        </nav>
        <!-- Nav end -->
    </div>
    <!-- Nav cont end -->


        <!-- Search cont -->
    <div class="container search">
        <div class="row-8 mt-2">
            <div class="btn d-flex justify-content-center">
                <input type="text" class="form-control meet" placeholder="Surasti" aria-label="Search">
                <a class="btn button6 knopkutis" type="button"><object type="image/svg+xml" data="./img/search.svg" width="20" height="20"></object></a>
            </div>
        </div>
    </div>
    <!-- Search cont end -->

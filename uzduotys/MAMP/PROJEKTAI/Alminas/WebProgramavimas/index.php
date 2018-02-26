<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="lt">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-amber.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/scss.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icon.png" />
    <title>Web programavimas</title>
</head>

<body>
    <div class="mdl-js-layout">
        <div class="mdl-grid">
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-offset">
                <div class="logo">
                    <img src="images/logo.png" alt="WebProgramavimas">
                </div>
                <div class="contacts">
                    <a href="https://www.facebook.com/Web-Programavimas-578086222527354/" class="nav-link"> <i class="fab fa-facebook"></i> </a>
                    <a href="https://www.instagram.com/alm1nas/" class="nav-link"> <i class="fab fa-instagram"></i></a>
                </div>
                <form action="php/includes/login.php" method="post">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="vardas" name="uid" >
                        <label class="mdl-textfield__label" for="vardas">Slapyvardis arba el. paštas</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label last_input">
                        <input class="mdl-textfield__input" type="password" id="pwd" name="pwd">
                        <label class="mdl-textfield__label" for="pwd">Slaptažodis</label>
                    </div>
                </br>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="submit">
                      Prisijungti
                  </button> <a href="register.php">Registracija</a>
                </form>

            </div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col footer">
                <p>
                    <i class="far fa-copyright"></i> Alminas Steponavičius 2018
                </p>
            </div>
        </div>
    </div>
    <!-- SCRIPTS ------------------------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>

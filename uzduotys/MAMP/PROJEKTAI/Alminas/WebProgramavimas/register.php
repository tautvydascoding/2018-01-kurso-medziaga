<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="lt">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-amber.min.css" />
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
                <form action="php/includes/signup.php" method="post" data-aos="zoom-in">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="vardas" name="first" minlength=3 maxlength="20" autocomplete="on" autofocus >
                        <label class="mdl-textfield__label" for="vardas">Vardas</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="pavarde"name="last" minlength=5 maxlength="30" autocomplete="on">
                        <label class="mdl-textfield__label" for="pavarde">Pavardė</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" id="email" name="email" minlength=5 maxlength="30" autocomplete="on">
                        <label class="mdl-textfield__label" for="email">El. Pašto adresas</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="nickas" name="uid" minlength=3 maxlength="20" autocomplete="on" >
                        <label class="mdl-textfield__label" for="nickas">Slapyvardis</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label last_input">
                        <input class="mdl-textfield__input" type="password" id="pwd" name="pwd" minlength=6 maxlength="30">
                        <label class="mdl-textfield__label" for="pwd">Slaptažodis</label>
                    </div>
                </br>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="submit">
                      Registruotis
                  </button>
                  <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Atgal</a></br></br>
                </form>
            </div>
        </div>
    </div>
    <!-- SCRIPTS ------------------------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>

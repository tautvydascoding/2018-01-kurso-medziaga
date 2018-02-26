
<!DOCTYPE html>
<html lang="lt">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css?version-5" />
        <link rel="stylesheet" type="text/css" href="css/media.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="libs/aos/aos.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
        <title>Web programavimas</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <?php include 'php/includes/header.php';?>
            </div>
            <div class="row banner_row">
                <img class="banner_image" alt="contacts_banner">
                <p class="banner_text">
                     SUSISIEKITE SU MUMIS!
                </p>
            </div>
            <div class="row forms_row">
                <div class="col-lg-4 offset-lg-4 col-md-12">
                <form class="form-group mt-4" action="php/email.php" onsubmit="return validate()" method="post">
                    <input type="text" name="vardas" value="<?php echo $_SESSION['u_uid'];?>" class="form_design mt-4" placeholder="Vardas*" autocomplete="on" required>
                    <input type="number" name="telnr" value="" class="form_design mt-4" placeholder="Telefono numeris*" autocomplete="on" required autofocus>
                    <input type="email" name="emailas" value="<?php echo $_SESSION['u_email']; ?>" class="form_design emailas mt-4" placeholder="El. Pašto adresas*" required>
                    <textarea class="mt-4" placeholder="Jūsų užsakymas arba klausimas man*" name="zinute" required></textarea></br>
                    <p class="lead error_para"></p>
                    <button type="submit" name=""class="default_button mt-2 send_button"><i class="far fa-envelope"></i> SIŲSTI</button>
                </form>
                </div>
            </div>
            <div class="row forms_row pb-4">
                <div class="col-lg-4 offset-lg-4 col-md-12">
                    <div class="hover_div"></div>
                    <strong>Adresas: </strong> KAUNAS/ALEKSOTAS </br>
                    <a role="button" class="copy_button" onclick="copy('.text1')" hovertext="Kopijuoti numerį į klaviatūrą"><i class="far fa-copy"></i></a> <strong>Tel nr: </strong>
                    <p class="text1">867271744</p></br>
                    <a role="button" class="copy_button" onclick="copy('.text2')" hovertext="Kopijuoti El. p. adresą į klaviatūrą"><i class="far fa-copy"></i></a> <strong>El paštas: </strong>
                     <p class="text2">alminas.st@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2294.2506258537987!2d23.862406116161836!3d54.89852318033361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e721f7a418098d%3A0x1d8189e7004c3ce2!2sMarvel%C4%97s+g.+127%2C+Kaunas+46207!5e0!3m2!1slt!2slt!4v1518456068993" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>
            </div>
            <div class="row">
                <?php include 'php/includes/footer.php';?>
            </div>
        </div>
        <!-- SCRIPTS ------------------------------------>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="libs/aos/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script type="text/javascript" src="js/contacts.js"></script>
    </body>
</html>

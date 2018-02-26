<!DOCTYPE html>
<html lang="lt">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css?version-4" />
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
            <!-- SLIDES START -------------------------------->
            <?php include 'php/includes/slides.php';?>
            <!-- SLIDES END ---------------------------------->
        </div>
        <!-- paslaugos start ---------------------------------->
        <div class="row paslaugos_row" id="paslaugos_row">
            <?php include 'php/includes/paslaugos.php';?>
        </div>
        <!-- paslaugos end ---------------------------------->
        <!-- atsiliepimai start ---------------------------------->
        <div class="row atsiliepimai_header" id="atsiliepimai_row">
            <div class="col-12">
                <p class="h1 p-4">KLIENTŲ ATSILIEPIMAI</p>
            </div>
        </div>
        <div class="row atsiliepimai p-4">
            <?php
            require_once 'php/includes/dbconnectionArticles.php';
            $straipsnis4 = getArticle(4);
            $straipsnis4 = mysqli_fetch_assoc($straipsnis4);
            ?>
            <div class="row" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-lg-5 offset-1">
                    <img src="images/person1.png" alt="Person" class="image-responsive"/>
                </div>
                <div class="col-lg-5 padding_l">
                    <?php  echo $straipsnis4['article'];  ?>
                </div>
            </div>
            <div class="row mt-4" data-aos="fade-left" data-aos-duration="2000">
                <div class="col-lg-5 offset-1 padding_r">
                    <?php
                    $straipsnis5 = getArticle(5);
                    $straipsnis5 = mysqli_fetch_assoc($straipsnis5);
                    ?>
                <?php  echo $straipsnis5['article'];  ?>
                </div>
                <div class="col-lg-5">
                    <img src="images/person2.png" alt="Person" class="image-responsive"/>
                </div>
            </div>
        </div><!-- atsiliepimai end ---------------------------------->
        <div class="row">
            <?php include 'php/includes/footer.php';?>
        </div>
    </div> <!-- container end ----------------------->

    <!----------------------- SCRIPTS ----------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="libs/aos/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

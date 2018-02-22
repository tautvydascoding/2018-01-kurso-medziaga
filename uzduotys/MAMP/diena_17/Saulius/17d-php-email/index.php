<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>

        <h1>Isijunk konsole</h1>
        <?php
        if (isset($_GET['vardas'])) {
        $vard = $_GET['vardas'];}
        if (isset($_GET['vardas'])) {
        $klaus = $_GET['klausimas'];}
        if (isset($_GET['vardas'])) {
        $elpast = $_GET['pastas'];}
        //echo $vard . $klaus . $elpast; // pasitestuojam
        // print_r($_GET); // testavimui
         ?>

<form class="" action="email.php" method="get">
    <input type="text" name="vardas" value="<?php if(isset($vard)){ echo $vard;} ?>" placeholder="Jusu vardas" autocomplete="" maxlength="50">
    <br>
    <textarea name="klausimas" placeholder="Jusu klausimas" rows="8" value="<?php if(isset($klaus)){ echo $klaus;} ?>" cols="20"></textarea>
    <br>
    <input type="email" name="pastas" value="<?php if(isset($elpast)){ echo $elpast;} ?>" placeholder="Jusu pastas" required autocomplete="" maxlength="50">
    <br>
    <button class="btn btn-flat" type="submit" name="button">SEND</button>
</form>






        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <!-- <script type="text/javascript">
            $('input[name="pastas"]').val('tekstas ivestas blogai'); // vieno lauko paselektinimas
        </script> -->
    </body>
</html>

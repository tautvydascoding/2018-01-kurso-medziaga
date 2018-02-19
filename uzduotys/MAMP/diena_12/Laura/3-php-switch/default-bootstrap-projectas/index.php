<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo "Mokysimes Switch"; ?> </title>
    </head>
    <body>

        <h1>Isijunk konsole</h1>

<?php



//UZDUOTIS
//paduoti varda ir jeigu jis lygus:
// "audi" - atspausti "Susimastykite apie variklio keitima";
// "bwm" - atspausti "Susimastykite apie greiti ir vairavimo kultura";
// "opel" - atspausti "Susimastykite apie naujus priedus";

$vardas = "opel";

switch ( $vardas) {
    case "audi":
        echo "Susimastykite apie variklio keitima";
        echo "<br />";
    break;
    default:
    echo "Nurodytos masinos neturime";
    echo "<br />";
    break;

}

switch ( $vardas) {
    case "bmw":
        echo "Susimastykite apie greiti ir vairavimo kultura";
        echo "<br />";
    break;
    default:
    echo "Nurodytos masinos neturime";
    echo "<br />";
    break;

}

Switch ($vardas) {
    case "opel":
    echo "Susimastykite apie naujus priedus";
    break;
    default:
    echo "neturime";
    break;
}










 ?>






        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

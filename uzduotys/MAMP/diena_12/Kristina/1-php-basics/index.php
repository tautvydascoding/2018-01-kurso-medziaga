<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

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
    <body>

        <h1>Isijunk konsole</h1>

        <?php 

        $vardas = "povilas";
        $amzius = 21;

        print("labas");
        echo "labas";  
        echo "labas $vardas <br>"; // butinai dvigubos kabutes! kitaip neveiks

        echo "labas " . $vardas . " viso <br>"; // string jungimas su php ".", o js su "+"

/////////////////local///////////////////

        $vardas ="tomas";
        function manoFunkcija($x) { // lokalus kintamasis todel nesikeis, kai issivesi f-ja atspausdinam globalu
            echo "1 x pries pakeiciant:" . $x . "<br>";
            $x = "karolis"; // jeigu dedi return tada gali sugrazinti x nebe vardas
        }
        manoFunkcija($vardas);
        echo $vardas . "<br>" ;   

//////////////////////////return/////////////////////////////

        function getmanoFunkcija($x) { // lokalus kintamasis todel nesikeis, kai issivesi f-ja atspausdinam globalu
            echo "2 x pries pakeiciant:" . $x . "<br>";
            $x = "karolis"; // jeigu dedi return tada gali sugrazinti x nebe vardas
            return $x; // kad neisgaruotu reikia 
        }
        $naujas = getmanoFunkcija($vardas); // kad neisgaruotu reikia
        echo $naujas . "<br>" ;  

//////////////////return///////////////////////

        function getSkaicius() {
            return 10;
        }
        echo "Mano skaicius: " . getSkaicius() . "<br>";

///////////& naudojant RAM adresa////////////////////

        $pavarde = "patris";
        function setManoFunkcija(&$x) { // laukia kintamojo adreso, slapto, nebe siaip kintamojo kaip pries tai
            echo "3 x pries pakeiciant:" . $x . "<br>"; // ^ skliaustuose pasikeis $pavarde
            $x = "karolis";
        }
        setManoFunkcija($pavarde);
        echo "pavarde (po pakeitimo) yra: $pavarde <br>";

///////////////////CONSTANT sukurimas/////////////////////
        
        define('SLAPTAZODIS', 'XKjfi564'); // butinai didziosios raides
        echo SLAPTAZODIS . "<br>";



        ?>





        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

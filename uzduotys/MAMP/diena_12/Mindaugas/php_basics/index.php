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
        <?

        $vardas = "povilas";
        $amzius = 21;

        print("labas $vardas <br>"); //veikia tik su dvigubomis kabutemis
        echo 'labas $vardas <br>'; // viengubose kabutese neveikia



        // tekstu jungimas su tasku
        echo "labas " . $vardas . " viso";


        $name = "tomas";
        $x = $name;
        $z = &$name; //ziuri i ta pati ramo langeli



        function manoFunkcija($x) {
            $x = "Karolis Didysis";

        }

        $naujas = manoFunkcija( $vardas);
        echo "be return" . $naujas . "<br>"; /// cia neveikia pasiziureti!!!

        function getManoFunkcija($x) {
            $x = "Karolis Didysis";
            return $x;
        }

        $naujas = getManoFunkcija( $vardas);
        echo  "su return " . $naujas . "<br>";


        $pavarde = "Patris";
        function setManoFunkcija(&$x) {
            $x = "Karolis Didysis";
        }
        setManoFunkcija($pavarde);
        echo "pavarde yra $pavarde"
        ?>




        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

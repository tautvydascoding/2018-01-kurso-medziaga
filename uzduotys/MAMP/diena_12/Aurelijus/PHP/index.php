<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
          <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body>
            <?php
                $vardas = "Povilas";
                $amzius = "23";
                print("Labas");
                echo "labas";

				echo "Labas" . $vardas . "viso"; //labas Povilas viso

				//===========================================================================
				$vardas = "Tomas";
				function manoFunkcija(){	//lokalus naujas isgalvotas laikinas kintamasis
					$x = "Karolis Didysis";
				}
				manoFunkcija($vardas);

				//===================================================================================
				function getManoFunkcija($x){	//lokalus naujas isgalvotas laikinas kintamasis
					echo "x pries pakeiciant: ". $x  "</br>";
					$x = "Karolis Didysis";
					return x;
				}
				$naujas = manoFunkcija($vardas);	//informacija issaugojama pries jai isnykstant
				echo $naujas . "</br>";
				//=================================================================================

             ?>
        <h1>Isijunk konsole</h1>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

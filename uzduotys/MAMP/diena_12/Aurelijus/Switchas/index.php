<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>I <?php echo "Mokysimes switch";?></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>

        <h1>Switch ciklai</h1>


        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

<?php
	//php gale failo patartina neuzdaryti
$vardas1 = "audi";


switch ($vardas1){
	case "bmw":
	echo "Negriauti autobusu stoteliu";
	echo "</br>";
	break;
	
	case "opel";
	echo "greitai rudija";
	echo "</br>";
	
	case "audi";
	echo "vaziuoja sniegu";
	echo "</br>";
	break;
	
	default: 
	echo "nurodytos masinos nera";
	echo "</br>";
	break;
}




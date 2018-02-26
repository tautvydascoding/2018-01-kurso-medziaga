<!DOCTYPE html>


<?php
  // jeigu post metodas suveike , ideti reiksmes i DB.
   // userio registracija

	require ('prisijungimas_prie_DB.php');
    if (isset($_POST['vartotojo_vardas']) && isset($_POST['slaptazodis'])){
        $vardas = $_POST['vartotojo_vardas'];
	$elpastas = $_POST['elpastas'];
        $slaptazodis = $_POST['slaptazodis'];

        $registruoti = "INSERT INTO `vartotojai` (vartotojo_vardas, slaptazodis, elpastas) VALUES ('$vardas', '$slaptazodis', '$elpastas')";
        $arpavyko = mysqli_query($connection, $registruoti);
        if($arpavyko){
            $ok = "Vartotojas sukurtas sėkmingai.";
        }else{
            $failreg ="Registracija nepavyko";
        }
    }
    ?>


<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registruotis</title>
  <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <form class="registracijos_forma" method="POST">
		 		<?php if(isset($ok)){ ?><div class="alert alert-success" role="alert"> <?php echo $ok; ?> </div><?php } ?>
					<?php if(isset($failreg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $failreg; ?> </div><?php } ?>
    <div class="reg_container">
      <div class="img2container">
        <img src="./images/8031433.jpg" alt="Avatar2" class="avatar2">

      </div>
      <h1 style="color: red"><strong>Registruotis</strong></h1>

			<label for="vartotojo_vardas" style="color: RGB(72, 251, 71)"><strong>Vartotojo vardas</strong></label>
			<input type="text" placeholder="Iveskite vartotojo vardą" name="vartotojo_vardas" required>

      <label for="elpastas" style="color: RGB(72, 251, 71)"><strong>El.pastas</strong></label>
      <input type="text" placeholder="Iveskite el.pasta" name="elpastas" required>

      <label for="slaptazodis" style="color: RGB(72, 251, 71)"><strong>Slaptazodis</strong></label>
      <input type="password" placeholder="Iveskite Slaptazodi" name="slaptazodis" required>

      <label for="pakartoti_slaptazodi" style="color: RGB(72, 251, 71)"><strong>Pakartoti slaptazodi</strong></label>
      <input type="password" placeholder="Pakartokite Slaptazodi" name="pakartoti_slaptazodi" required>

      <label style="color: RGB(72, 251, 71)">
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Prisiminti
      </label>

      <div class="mygtukai">
      	<a href="index.php"> Atšaukti </a>
        <button type="submit" class="registruotis_btn">Registruotis</button>
      </div>
    </div>
  </form>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


</html>

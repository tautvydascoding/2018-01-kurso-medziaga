
<!DOCTYPE html>

<?php

session_start();
require ('prisijungimas_prie_DB.php');
// user ir pssw kintamieji
$vartotojas = "test";
$slaptazodis = "pass";


echo $_SESSION['Prisijungta'];

// patikrina ar prisijunges vartotojas, jei ne tai nukreipia i prisijungta.php
if (isset($_SESSION['Prisijungta']) && $_SESSION['Prisijungta'] == true) {
    echo "Prisijungti pavyko";
    header('Location: prisijungta.php');
}

// patikrina ar suvesti prisijungimo duomenys
// jei suvesti tai prijungia vartotoja
if (isset($_POST['username']) && isset($_POST['username'])) {
    if ($_POST['username'] == $vartotojas && $_POST['slaptazodis'] == $slaptazodis) {
        $_SESSION['Prisijungta'] = true;
        echo $_SESSION['Prisijungta'];
        header('Location: prisijungta.php');
    } else {
        $_SESSION['Prisijungta'] = false;
        $error = "Neteisingi prisijungimo duomenys!";
    }
}
?>






<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prisijungti</title>
  <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<?php echo $_SESSION['Prisijungta']; ?>

  <form action="login_forma.php" method="post">
    <div class="imgcontainer">
      <img src="./images/user-login.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username" style="color: RGB(72, 251, 71)"><strong>Vartotojo vardas</strong></label>
      <input type="text" placeholder="Iveskite vartotojo varda" name="username" required>

      <label for="slaptazodis" style="color: RGB(72, 251, 71)"><strong>Slaptazodis</strong></label>
      <input type="password" placeholder="Iveskite Slaptazodi" name="slaptazodis" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Prisijungti</button>
      <label style="color: RGB(72, 251, 71)">
        <input  type="checkbox" checked="checked" name="prisiminti"> <strong>Prisiminti</strong>
      </label>
    </div>

    <div class="container" style="background-color:white">
      <button  type="reset" class="atsaukti">Atsaukti</button>

      <span class="slaptazodis">Pamirsai <a href="slaptazodzio_priminimas.php">slaptazodi?</a></span>
    </div>
  </form>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>

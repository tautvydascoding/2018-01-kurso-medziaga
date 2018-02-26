
<!DOCTYPE html>




<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slaptažodžio priminimas</title>
  <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



  <form class="" action="splatazodzio_priminimas.php" method="POST">
    <div class="imgcontainer">
      <img src="./images/reset_pwd.gif" alt="Avatar3" class="avatar3">
    </div>

    <div class="container">
      <label for="username" style="color: RGB(72, 251, 71)"><strong>Vartotojo vardas</strong></label>
      <input type="text" placeholder="Iveskite vartotojo varda" name="username" required>

      <label for="elpastas" style="color: RGB(72, 251, 71)"><strong>El.pastas</strong></label>
      <input type="text" placeholder="Iveskite el.pasta" name="elpastas" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Keisti slaptažodį</button>
    </div>

  </form>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


</html>

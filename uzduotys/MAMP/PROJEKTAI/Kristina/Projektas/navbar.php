<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gvido Diržio komiksų galerija</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./KCS/Diz/fonts/okami.otf"><link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    </head>

    <body>
<!-- NAVBAR -->

        <header class="container">
            <div class="row">

                <nav class=" col-12 header fixed-top navbar navbar-expand-lg navbar-dark ul  justify-content-center ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-end">
                        
                        <li class="nav-item"><a class="nav-link" id="myReg" data-toggle="modal" data-target="#myModal2">REGISTRACIJA</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">PAGRINDINIS</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">APIE</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php">PROJEKTAI</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">GALERIJA</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">KONTAKTAI</a></li>
                    </ul>
                </div>
                </nav>
            </div>
        </header>

<div class="wrapper container-fluid d-flex align-items-center justify-content-center">

    <!-- Modal2 -->
  <div class="modal modal1 fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Prisijungimas</h4>
          <span class="close2 cursor" data-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body">
          <form role="form" action="" method="">
              <input type="text" name="log_vardas" class="form-control" placeholder="Jūsų vardas">
              <input type="text" name="log_slaptazodis" class="form-control" placeholder="Slaptažodis">
              <button type="submit" class="btn reg btn-block mt-2"> Prisijungti</button>
          </form>
        </div>

        <div class="modal-footer">
          <p>Norite <a id="modalbtn2" href="" data-toggle="modal" data-target="#myModal1">užsiregistruoti?</a></p>
        </div>
      </div>
    </div>
  </div> 


  <!-- Modal1 -->
  <div class="modal modal1 fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4>Registracija</h4>
          <span class="close2 cursor" data-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body">
          <form name="myForm" role="form" action="registracija.php" method="post" onsubmit="return validate(event);">
           <!--  <div class="error-message"></div>     -->
              <input type="text" name="reg_vardas" class="form-control" placeholder="Jūsų vardas">
              <input type="text" name="reg_slaptazodis" class="form-control" placeholder="Slaptažodis">
              <input type="email" name="reg_elpastas" class="form-control" placeholder="Jūsų el. paštas">
              <button type="submit" class="btn reg btn-block mt-3"> Registruotis</button>
          </form>
        </div>
    
        <div class="modal-footer">
          <p>Norite <a id="modalbtn1" href="" data-toggle="modal" data-target="#myModal1">prisijungti?</a></p>
        </div>
      </div>
    </div>
  </div> 

</div>


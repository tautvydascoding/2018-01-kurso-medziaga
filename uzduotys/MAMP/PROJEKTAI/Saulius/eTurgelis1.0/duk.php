<?php require_once("./header.php") ?>

<!-- Email vars -->
<?php
if (isset($_GET['vardas'])) {
$vard = $_GET['vardas'];}
if (isset($_GET['vardas'])) {
$klaus = $_GET['klausimas'];}
if (isset($_GET['vardas'])) {
$elpast = $_GET['pastas'];}
//echo $vard . $klaus . $elpast; // TEST
// print_r($_GET); // TEST
 ?>
<!-- Email vars end -->

<!-- Susisiekti -->
<section class="container">
<div class="row">
    <div class="col-12">
        <section class="">
            <p>
                <button class="btn button6 dark w-100" type="button" data-toggle="collapse" data-target="#colapse" aria-expanded="false" aria-controls="collapseExample">

                    <div class="h5"><img class="" src="./img/duk.svg" alt="" style="height:2rem">
                        Klausimas 1
                    </div>
                </button>
            </p>
            <div class="collapse" id="colapse">
                <div class="tamsus p-3 text-justify mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </section>
        <section class="">
            <p>
                <button class="btn button6 dark w-100" type="button" data-toggle="collapse" data-target="#colapse2" aria-expanded="false" aria-controls="collapseExample">

                    <div class="h5"><img class="" src="./img/duk.svg" alt="" style="height:2rem">
                        Klausimas 2
                    </div>
                </button>
            </p>
            <div class="collapse" id="colapse2">
                <div class="tamsus p-3 text-justify mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </section>
        <section class="">
            <p>
                <button class="btn button6 dark w-100" type="button" data-toggle="collapse" data-target="#colapse3" aria-expanded="false" aria-controls="collapseExample">

                    <div class="h5"><img class="" src="./img/duk.svg" alt="" style="height:2rem">
                        Klausimas 3
                    </div>
                </button>
            </p>
            <div class="collapse" id="colapse3">
                <div class="tamsus p-3 text-justify mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </section>
        <section class="">
            <p>
                <button class="btn button6 dark w-100" type="button" data-toggle="collapse" data-target="#colapse4" aria-expanded="false" aria-controls="collapseExample">

                    <div class="h5"><img class="" src="./img/duk.svg" alt="" style="height:2rem">
                        Klausimas 4
                    </div>
                </button>
            </p>
            <div class="collapse" id="colapse4">
                <div class="tamsus p-3 text-justify mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </section>
        <section class="">
            <p>
                <button class="btn button6 dark w-100" type="button" data-toggle="collapse" data-target="#colapse5" aria-expanded="false" aria-controls="collapseExample">

                    <div class="h5"><img class="" src="./img/duk.svg" alt="" style="height:2rem">
                        Klausimas 5
                    </div>
                </button>
            </p>
            <div class="collapse" id="colapse5">
                <div class="tamsus p-3 text-justify mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </section>
    </div>

</div>

<!-- Row -->
    <div class="row">
        <div class="col-12 col-md-6 sviesus">
            <div id="karusele" class="carousel slide p-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 imgb" src="./img/duk/1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Pagrindine nuotrauka</h5>
                            <p>Lorem lorem lorem</p>
                        </div>
                    </div>
                    <?php for ($i=2; $i < 6 ; $i++) : ?>
                        <div class="carousel-item">
                        <img class="d-block w-100 imgb" src="./img/duk/<?php echo $i; ?>.jpg" alt="Second slide">
                        </div>
                    <?php endfor; ?>
                </div>
                <a class="carousel-control-prev" href="#karusele" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Atgal</span>
                </a>
                <a class="carousel-control-next" href="#karusele" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Pirmyn</span>
                </a>
            </div>
            <p class="tamsus text-justify p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="col-12 col-md-6 tamsus">
            <h2 class="text-center">Turite daugiau klausimų? Susisiekite!</h2>
            <form class="" action="email.php" method="get">
                <div class="form-group">
                    <label class=" w-100 text-center" for="foto">Jusu vardas</label>
                    <input class="form-control  sviesus2 fontas" type="text" name="vardas" value="<?php if(isset($vard)){ echo $vard;} ?>" placeholder="Jusu vardas" autocomplete="" maxlength="50">
                </div>
                <div class="form-group">
                    <label class=" w-100 text-center" for="foto">Klausimas</label>
                    <textarea class="form-control  sviesus2 fontas" name="klausimas" placeholder="Jusu klausimas" rows="8" value="<?php if(isset($klaus)){ echo $klaus;} ?>" cols="60"></textarea>
                </div>
                <div class="form-group">
                    <label class=" w-100 text-center" for="foto">Jusu el pasto adresas</label>
                    <input class="form-control  sviesus2 fontas" type="email" name="pastas" value="<?php if(isset($elpast)){ echo $elpast;} ?>" placeholder="Jusu pastas" required autocomplete="" maxlength="50">
                </div>
                <div class="form-group">
                    <button class="btn button6 dark w100" type="submit" name="button">Siusti</button>
                </div>
            </form>
        </div>
    </div>
<!-- Row end -->
</section>
<!-- Susisiekti end -->



<?php require_once("./footer.php") ?>

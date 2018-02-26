<?php require_once("./header.php");?>

<!-- Add cont -->
<div class="container">
    <div class="row">
        <?php
        if (isset($_SESSION['username'])) :
         ?>
        <div class="col-12 col-lg-3 mr-3 tamsus">
            <img class="new d-flex mt-2" alt="logotipas" src="./img/tab.svg">
            <h3 class="text-center">Naujas skelbimas</h3>
            <p class="text-center">Noredami ideti nauja skelbima uzpildykite visus nurodytus laukelius ir spauskite mygtuka "Ideti"</p>
            <a class="btn button6 klausimai w-100" href="./duk.php" role="button">Kilo klausimu?</a>
        </div>
        <div class="col sviesus">
            <div class='mt-1'>
                <form action="./includes/new.php" method="post">
                    <div class="form-group">
                        <label class=" w-100 text-center" for="foto">Skelbimo nuotrauka</label>
                        <input id="foto" class="form-control sviesus2 fontas" type="text" name="foto" value="" placeholder="Foto" autocomplete="" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label class=" w-100 text-center" for="antraste">Daikto pavadinimas</label>
                        <input id="antraste" class="form-control sviesus2 fontas" type="text" name="antraste" value="" placeholder="Pavadinimas" required autocomplete="" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label class=" w-100 text-center" for="aprasymas">Aprasymo tekstas</label>
                        <textarea id="aprasymas" class="input-group sviesus2 fontas" name="aprasymas" placeholder="Prekes aprasymas" rows="8" value="" cols="60"></textarea>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label class=" w90 text-center d-inline" for="userid">Skelbima ikele vartotojas: <?php echo $_SESSION['username']; ?></label>
                        <input class=" w10 input-group d-inline text-center" readonly type="text" name="userid" value="<?php echo $_SESSION['id']; ?>" placeholder="Ikele" required autocomplete="" maxlength="50">
                    </div>
                    <input class="btn btn-trans button6 w-100" type="submit" action="submit" name="button"></input>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-4 ml-3 sonas tamsus">

        </div>
        <?php else: ?>
            <div class="col-6 offset-3 kat">
                <h3>Noredami ideti skelbima prisijunkite</h3>
                    <form class='' action='./includes/login.php' method='post'>
                        <input class='form-control sviesus2 fontas' type='text' name='username' placeholder='Kietas usename' />
                        <br>
                        <input class='form-control sviesus2 fontas' type='password' name='pwd' placeholder='Slaptazodis' />
                        <br>
                        <button class='btn dark form-control button6 text-center' type='submit' href='./skelbimas-add-new.php' name='button'>login</button>
                    </form>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Add cont end -->

<?php require_once("./footer.php") ?>

<foter class="dugnas container">
    <div class="row  justify-content-center">
        <div class="col-8 text-center">

            <a href="#"> <img id="icons" src="./images/fb.svg" alt=""> </a>
            <a href="#"> <img id="icons" src="./images/inst.svg" alt=""> </a>
            <a href="#"> <img id="icons" src="./images/linked.svg" alt=""> </a>
            <a href="#" id="pastas"> <img id="icons" src="./images/env.svg" alt=""> </a>
            <a href="contacts.php"> <img id="icons" src="./images/mob.svg" alt=""> </a>
        </div>
    </div>
</foter>

<div class=" container modal fade" id="uzklausos_forma" role="dialog">
    <div class="row modal-dialog sokas">

      <!-- Modal content-->
      <form class="col-12" action="send_email.php" method="get">
          <div class="modal-content">
              <div class="row modal-header">
                  <h4 class="col-10 modal-title">Užklausa</h4>
                  <button type="button" class="col-2 close" data-dismiss="modal">&times;</button>

              </div>

              <div class="row modal-body">
                  <div class="col-12 text-center">
                      <input class="formos" type="text" name="vardas"  value="<?php if( isset($vard) ) {echo $vard;} ?>" placeholder="Jūsų vardas" autocomplete="" maxlength="50" required>
                      <br />
                      <br />
                      <textarea name="klausimas" rows="8" cols="40" placeholder="Jūsų klausimas" required> </textarea>
                      <br />
                      <br />
                      <input  class="formos"type="email" name="pastas" value=""  autocomplete="" required placeholder="Jūsų el. paštas" maxlength="50">
                      <br />
                    </div>
                </div>
                <div class="row modal-footer">
                    <div class="col-12 text-center">
                        <button class="mygtukas" type="submit">Klausti</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>














<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU9_cEktvd-cT-IS6QFv4XIsUQTxI8jkY&callback=initMap"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>


<!-- NAVBAR -->

        <?php
        require_once('navbar.php');
        ?>

<!--       <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a> -->
<!--       </li>
    </ul> -->


<!-- HOME PAGE BACKGROUND -->

            <?php
            require_once('homepageBG.php');
            ?>
            
<!-- CONTACTS -->

        <div class="bgd1 container-fluid">
            <div class="row">
                <div class="col-12 h-100 ">
                     <h3 class="sekcija pb-4">Susisiekime</h3>
                </div>
            </div>  <!-- TITLE -->

            <div class="row projektai">

                <div class="contact col-lg-6 col-md-6 col-xs-6 ">

                    <?php 
                    require_once ('./libs/db_config.php');
                    $kontaktai = getKontaktai(1);
                    ?>

                    <div class="">
                        <p><i class="material-icons icons">location_on</i><?php echo $kontaktai['adresas']?></p>
                        
                        <p><i class="material-icons icons">call</i><?php echo $kontaktai['telnr']?></p>
                        
                        <p><i class="material-icons icons">mail_outline</i><?php echo $kontaktai['elpastas']?></p>
                    </div>
                </div>

                <div class="contact-form col-lg-6 col-md-6 col-xs-6">
                    <form action="send_email.php" method="get">
                        <input class="inputas" type="text" name="vardas" placeholder=" Jūsų vardas" maxlength="50" required value="" > <br>
                        <input class="inputas" type="email" name="elpastas" value="" placeholder=" Jūsų el. paštas" required value="" > <br>
                        <textarea  class="textarea1" name="zinute" rows="8" cols="80" placeholder=" Jūsų žinutė" required></textarea> <br>
                        <input class="inputas siusti" type="submit" name="" value="SIŲSTI">
                    </form>
                </div>
            </div>   
        </div>

















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

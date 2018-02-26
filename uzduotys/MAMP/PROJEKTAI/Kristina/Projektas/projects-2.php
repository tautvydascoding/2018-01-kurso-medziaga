
<!-- NAVBAR -->


        <?php
        require_once('navbar.php');
        ?>

<!-- HOME PAGE BACKGROUND -->


            <?php
            require_once('homepageBG.php');
            ?>

<!-- PROJEKTAI -->

        <div class="bgd1 container-fluid">
            <div class="row">
                <div class="col-12 h-100 ">
                     <h3 class="sekcija pb-4">Projektai</h3>
                </div>
            </div>  <!-- TITLE -->


            <div class="row projektai">

                <div class="col-6 proj-col-2 col-lg-6 col-md-6 col-xs-6 d-flex justify-content-center ">

                    <div id="carousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="numbertext2">1 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/1.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">2 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/2.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">3 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/3.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">4 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/4.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">5 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/5.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">6 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/6.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">7 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/7.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">8 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/8.jpg">
                        </div>
                        <div class="carousel-item">
                            <div class="numbertext2">9 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/9.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">10 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/10.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">11 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/11.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">12 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/12.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">13 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/13.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">14 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/14.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">15 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/15.jpg">
                        </div>                        
                        <div class="carousel-item">
                            <div class="numbertext2">16 / 16</div>
                            <img class="d-block w-70" src="./img/kumamoto-diamond/16.jpg">
                        </div>
                        
                      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>


                    </div>  <!-- end inner carousel -->

                    </div> <!-- end id carousel -->

                </div>  <!-- end col -->

                <div class="col-6 proj-col-2 pt-10 col-lg-6 col-md-6 col-xs-6">
                    <div class="proj-names-fonas">
                        <h4 class="proj-names-2"><i>KUMAMOTO DIAMOND</i></h4> 
                        <p class="proj-names-cont">Manga skirta Silent Manga Audition konkursui (konkurso tema - "Kumamoto, smile"). <br> Manga pasakoja istoriją apie du draugus, kurie po savo kelionės Kumamoto regione pasižada ten vėl sugrįžti, prisimindami kiek šypsenų suteikė šioji kelionė.</p>
                    </div>

                    <div class="proj-names-fonas">
                        <h4 class="proj-names-2"><i>Palikite savo balsą!</i></h4> 
                        <div class="contact-form2 col-lg-6 col-md-6 col-xs-6">
                            <form action="balsavimas.php" method="post" id="balsavimas">
                                <input type="radio" name="vote" value="1"> 1
                                <input type="radio" name="vote" value="2"> 2
                                <input type="radio" name="vote" value="3"> 3 
                                <input type="radio" name="vote" value="4"> 4
                                <input type="radio" name="vote" value="5"> 5 <br><br>        
                                <input class="siusti inputas" type="submit" name="" value="SIŲSTI">
                            </form>
                            <br><div id="result"></div>
                        </div>
                    </div>

                    <div class="proj-names-fonas">
                        <h4 class="proj-names-2"><i>Palikite atsiliepimą</i></h4> 
                        <div class="contact-form2 col-lg-6 col-md-6 col-xs-6">
                            <form action="komentarai.php" method="post">
                                <input class="inputas" type="text" name="vardas" placeholder=" Jūsų vardas" maxlength="50" required value="" > <br>
                                <textarea  class="textarea1" name="komentaras" rows="8" cols="80" placeholder=" Jūsų komentaras" required></textarea> <br>
                                <input class="siusti inputas" type="submit" name="" value="SIŲSTI">
                            </form>
                        </div>
                    </div>
                    
                </div>  <!-- end col -->

            </div>  <!-- end row -->

        </div> <!-- end container -->






        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>

        <script type="text/javascript">
        $(document).ready(function(){
            $("#balsavimas").submit(function(event){
                // Stop form from submitting normally
                event.preventDefault();
                
                /* Serialize the submitted form control values to be sent to the web server with the request */
                var formValues = $(this).serialize();
                
                // Send the form data using post
                $.post("balsavimas.php", formValues, function(data){
                    // Display the returned data in browser
                    $("#result").html(data);
                });
            });
        });
        </script>
        
    </body>
</html>

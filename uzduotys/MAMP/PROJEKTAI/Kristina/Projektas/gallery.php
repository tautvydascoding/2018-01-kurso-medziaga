
<!-- NAVBAR -->


        <?php
        require_once('navbar.php');
        ?>

<!-- HOME PAGE BACKGROUND -->

            <?php
            require_once('homepageBG.php');
            ?>

<!-- GALERIJA -->

        <div class="bgd1 container-fluid">
            <div class="row">
                <div class="col-12 h-100 ">
                     <h3 class="sekcija pb-4">Galerija</h3>
                </div>
            </div> 

            <div class="row galerija ">
                
                <div class="col galerija-col ">
                    <img class="card" src="./img/galerija/scan1.jpg"onclick="openModal();currentSlide(1)"> 
                    <img class="card" src="./img/galerija/scan2.jpg"onclick="openModal();currentSlide(2)"> 
                    <img class="card" src="./img/galerija/scan3.jpg"onclick="openModal();currentSlide(3)"> 
                    <img class="card" src="./img/galerija/scan4.jpg"onclick="openModal();currentSlide(4)">  
                    <img class="card" src="./img/galerija/scan5.jpg"onclick="openModal();currentSlide(5)"> 
                </div>    
                            
                <div class="col galerija-col-2 ">
                    <img class="card" src="./img/galerija/scan6.jpg"onclick="openModal();currentSlide(6)"> 
                    <img class="card" src="./img/galerija/scan7.jpg"onclick="openModal();currentSlide(7)">                     
                    <img class="card" src="./img/galerija/scan8.jpg"onclick="openModal();currentSlide(8)"> 
                    <img class="card" src="./img/galerija/scan9.jpg"onclick="openModal();currentSlide(9)"> 
                    <img class="card" src="./img/galerija/scan10.jpg"onclick="openModal();currentSlide(10)">
                    <img class="card" src="./img/galerija/scan11.jpg"onclick="openModal();currentSlide(11)"> 
                    <img class="card" src="./img/galerija/scan12.jpg"onclick="openModal();currentSlide(12)"> 
                    <img class="card" src="./img/galerija/scan13.jpg"onclick="openModal();currentSlide(13)"> 
                </div>   

                <div class="col galerija-col"> 
                    <img class="card" src="./img/galerija/scan14.jpg"onclick="openModal();currentSlide(14)"> 
                    <img class="card" src="./img/galerija/scan15.jpg"onclick="openModal();currentSlide(15)"> 
                    <img class="card" src="./img/galerija/scan16.jpg"onclick="openModal();currentSlide(16)"> 
                    <img class="card" src="./img/galerija/scan17.jpg"onclick="openModal();currentSlide(17)"> 
                    <img class="card" src="./img/galerija/scan18.jpg"onclick="openModal();currentSlide(18)">                     

                </div>

                <div class="col galerija-col-2 ">
                    <img class="card" src="./img/galerija/scan19.jpg"onclick="openModal();currentSlide(19)"> 
                    <img class="card" src="./img/galerija/scan20.jpg"onclick="openModal();currentSlide(20)">
                    <img class="card" src="./img/galerija/scan21.jpg"onclick="openModal();currentSlide(21)"> 
                    <img class="card" src="./img/galerija/scan22.jpg"onclick="openModal();currentSlide(22)"> 
                    <img class="card" src="./img/galerija/scan23.jpg"onclick="openModal();currentSlide(23)"> 
                    <img class="card" src="./img/galerija/scan24.jpg"onclick="openModal();currentSlide(24)"> 
                    <img class="card" src="./img/galerija/scan25.jpg"onclick="openModal();currentSlide(25)"> 
                    <img class="card" src="./img/galerija/scan26.jpg"onclick="openModal();currentSlide(26)"> 
                </div>

            </div>  <!-- end row -->
        </div> <!-- end container -->

        <!-- lightbox -->

        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="modal-content  d-flex align-items-center justify-content-center">

            <?php
            for ($i = 1; $i < 27; $i++) { 
            ?>

                <div class="mySlides">
                    <div class="numbertext"><?php echo $i ?> / 26</div>
                    <img class="modal-img" src="./img/galerija/scan<?php echo $i ?>.jpg">
                </div>
                
            <?php } ?> 

            </div> <!-- end modal-content -->

        </div> <!-- end myModal - LIGHTBOX -->

















        <!-- js puslapio apacioje -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

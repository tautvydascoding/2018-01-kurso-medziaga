<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <!-- <div class="container">
            <div class="row">
                <div class="col-10 aukstis-100 bg-info">

                </div>
            </div>
            <div class="row">
                <div class="col-10 aukstis-500 bg-warning">



                </div>
            </div>
            <div class="row">
                <div class="col-18 bg-info aukstis-100">

                </div>
            </div>
        </div> -->






        <?php
            // $Foto = ['IslenktaLentyna.jpg','Library.jpg','Scifi2.jpg','Rankdarbiai.jpg'];
            // for($i=0; $i < count($Foto); $i++){
            //     echo "<img src='./images/" . $Foto[$i] . "' alt=''>";
            //         if(($i +1)%3 === 0){
            //             echo "</br>";
            //         }
            // }


            $prekes = [];
            $prekes[0] = ["Dviratis", "<img src='./images/GoogBook.jpg'>", 99.99, "Lorem ipsum dolor ion ure dolor init ariatur. cut mollit anim id est laborum."];
            $prekes[1] = ["Masina", "Library.jpg", 999.99, "Lorem ipsum dolor ion ure dolor init ariatur. cut mollit anim id est laborum."];
            $prekes[2] = ["Paspirtukas", "Naturejpg", 199.99, "Lorem ipsum dolor ion ure dolor init ariatur. cut mollit anim id est laborum."];
            $prekes[3] = ["Dviratis", "Kulinarija.jpg", 9.99, "Lorem ipsum dolor ion ure dolor init ariatur. cut mollit anim id est laborum."];
                // print_r($prekes);
                    for($i=0; $i<count($prekes); $i++){
                    // for($j=0; $j<count($prekes); $j++){
                    // echo $prekes[$i][$j];
                    // echo "</br>";

                    ?>
                    <article class="col-4">
                        <h3><?php echo $prekes[$i][1]; ?></h3>
                        <img src="'./images/Scifi2.jpg'" alt="oi ne, neveikia">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="btn btn-lg btn-warning"></a>
                    </article>


                    <?php
                }
                // }








        ?>

        <!-- <img src="./images/BestTypeOfCoding.jpg" alt="">
        <img src="./images/Atostogu.jp" alt=""> -->


    <!-- Labaoi svarbu -->    <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js">     </script>
    </body>
</html>

<?php
include ('office_header.php');
 ?>


<main class="container offi ">
    <div class="header"></div>
    <div class="row justify-content-center">
        <div class=" pirst col-12 justify-content-center">

            <?php require_once ('sql_functions.php');

            for ($i=0; $i<50; $i++) {
            $produktas = getPItem($i);
            if ($produktas != NULL) {


            ?>
    <!-- dedami produktai su nuskaitymu is DB -->
            <div class="card">
                <img class="card-img-top" src="./images/<?php echo $produktas['img_path']; ?>" alt="Juritta baldai">
                <h5 class="card-title"><?php echo $produktas['name']; ?></h5>
                <p class="card-text"><?php echo $produktas['description']; ?></p>
    </div>
<?php
    }
} ?>
        </div>

    </div>
 </main>

 <?php
include ('footer.php');
  ?>

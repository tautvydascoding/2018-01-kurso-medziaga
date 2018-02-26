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
 <div class=" container modal fade" id="laiskas_issiustas" role="dialog">
     <div class="row modal-dialog sokas">



           <div class="modal-content">
               <div class="row modal-header">
                   <h4 class="col-10 modal-title"></h4>
                   <button type="button" class="col-2 close" data-dismiss="modal">&times;</button>

               </div>

               <div class="row modal-body">
                   <div class="col-12 text-center">
                       <h4>Jūsų laiškas išsiustas</h4>
                     </div>
                 </div>
                    <div class="row modal-footer">
                     <div class="col-12 text-center">
                         <button class="mygtukas" type="button" data-dismiss="modal">OK</button>
                     </div>
                 </div>

         </div>
     </div>
 </div>





 <?php
include ('footer.php');
  ?>

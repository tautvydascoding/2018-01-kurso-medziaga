<!-- HOME PAGE BACKGROUND -->

            <?php
            require_once ('./libs/db_config.php');
            $homepage = getHomepage(1);
            ?>

        <div class="bgd container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="misete"><?php echo $homepage['name']?></h1>
                    <p class="miseteH"><?php echo $homepage['content']?></p>
                 </div>
            </div>        
        </div>
<?php require_once ('./libs/doctors_db.php'); ?>
<class ="container">
    <article class="row p-5">
        <?php
            $gydytojas = getDoctor(1); //masyvas - info apie gydytoja Array ( [id] => 2 [name] => Paul [lname] => Leo )
            // print_r ($gydytojas);
        ?>
        <div class="col-6 bg-info">
            <?php echo $gydytojas['id']; ?>
            <?php echo $gydytojas['name']; ?>
        </div>
        <div class="col-6 bg-warning">
        <?php echo $gydytojas['lname']; ?>
        </div>
        <a href="./delete_doctor.php?numeris=<?php echo $gydytojas['id']; ?>" class="btn btn-danger">Delete</a>
    </article>
</div>


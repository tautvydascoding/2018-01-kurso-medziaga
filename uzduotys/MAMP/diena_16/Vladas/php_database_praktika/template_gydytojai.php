

<?php require_once('./libs/doctors_db.php'); echo "<br>"; ?>

<div class="container">
    <article class="row">
        <?php
            $gydytojas = getDoctor(1);
         ?>
         <br>
        <div class="col-6 bg-info">
            <h2> <?php echo $gydytojas['id'];?></h2>
            <h2> <?php echo $gydytojas['name'];?></h2>
        </div>
        <div class="col-6 bg-danger">
            <h2> <?php echo $gydytojas['lname'];?></h2>
        </div>
        <a href="./delete_doctor.php?numeris=<?php echo $gydytojas['id'];?>" class="btn btn-warning">DELETE</a>
    </article>
</div>

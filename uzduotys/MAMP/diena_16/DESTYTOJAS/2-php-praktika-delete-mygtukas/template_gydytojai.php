<?php
    require_once('./libs/doctors_db.php'); echo "<br>";
?>
<div class="container">
    <article class="row p-5">
        <?php
            $gydytojas = getDoctor(5); //  Array ( [id] => 5 [name] => Koris [lname] => Pita )
        ?>
        <div class="col-6 bg-info ">
            <h2>
                <?php echo $gydytojas['id']; ?>
                <?php echo $gydytojas['name']; ?>
            </h2>
        </div>
        <div class="col-6 bg-warning ">
            <h2>
                <?php echo $gydytojas['lname']; ?>
            </h2>
        </div>
        <a href="delete_doctor.php" class="btn btn-danger "> DELETE </a>
    </article>
</div>

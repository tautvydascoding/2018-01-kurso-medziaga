<?php
    require_once('./libs/doctorsDB.php'); echo "<br>";
?>
<div class="container">
    <article class="row p-5">
        <?php
            $gydytojas = getDoctor(1); //  Array ( [id] => 5 [name] => Koris [lname] => Pita )
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
        <a href="delete_doctor.php?numeris=13" class="btn btn-danger "> DELETE </a>
    </article>
</div>

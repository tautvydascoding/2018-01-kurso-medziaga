<div class="container">
    <section class="row p-5">
        <?php error_reporting(E_ALL);
        ini_set('display_errors', 'on');

        include('./libs/hospital1_DB.php');
        $gydytojas = getDoctor(2); //Array ( [id] => 1 [name] => Tim [lname] => Logan )
        $num = $gydytojas['id'];
            ?>

        <article class="col-4 bg-light ">
            <h2 class="d-inline pr-2"> <?php echo $gydytojas['id']; ?> </h2>
            <h2 class="d-inline"> <?php echo $gydytojas['name']; ?> </h2>
        </article>
        <article class="col-3 bg-dark text-light">
            <h2> <?php echo $gydytojas['lname']; ?> </h2>
        </article>
        <a href="delete_doctor.php?numeris=<?php echo $num; ?><" class="col-1 btn btn-info">DELETE</a>
    </section>

</div>

<?php
    require_once('./libs/doctorsDB.php');
    $gydytojas = getDoctor(9); // masyvas - Array ( [id] => 2 [name] => Kazys [lname] => Onutaite )
    // print_r($gydytojas);
?>
<div class="container">
    <article class="row">
        <div class="col-6 bg-warning">
            <h2>
            <?php echo $gydytojas['id']; ?>
            <?php echo $gydytojas['name']; ?>
            </h2>
        </div>
        <div class="col-6 bg-info">
            <h2><?php echo $gydytojas['lname']; ?></h2>
        </div>

        <a href="./delete_doctor.php?numeris=<?php echo $gydytojas['id']; ?>" class="btn btn-success">Tikrai ne DROP DATABASE</a>
    </article>
</div>


<?php if ($GET['trinti'] == true) {
    deleteDoctor( $GET['numeris'] ); //numeris=9
// http://localhost/diena_16/Saulius/16d-2-php-db/delete_doctor.php?trinti=true&numeris=9
//
} ?>

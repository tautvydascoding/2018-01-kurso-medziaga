<?php require_once "./templates/head_navbar.php"; ?>
<?php  require_once ("./templates/php_db.php");
    $nr = $_GET['straipsnis'];
    getStraipsnis ($nr);
    $vienas_straipsnis = getStraipsnis ($nr);
?>
    <section class="container-fluid background-contacts d-block">
        <div class="container">
            <h1 class="white-text"><?php echo $vienas_straipsnis['antraste']; ?></h1>
        </div>
    </section>
    <section class="container">
        <div class="row padding-l-r-15">
            <div class="col padding-4 bg-white">
                <h4>
                    <?php echo $vienas_straipsnis['paragrafas_1']; ?>
                </h4>
        </div>
    </section>
<?php require_once "./templates/maps_scripts_footer.php"; ?>


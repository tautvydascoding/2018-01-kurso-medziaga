<?php require_once "./templates/head_navbar.php"; ?>
<?php  
    require_once "./templates/php_db.php";
    $vardas = $_GET['vardas'];
    $pavarde = $_GET['pavarde'];
    $telefonas = $_GET['telefonas'];
    $elpastas = $_GET['pastas'];
    createCoaching ($vardas, $pavarde, $telefonas, $elpastas);
?>
    

<section class="container-fluid background-contacts d-block">
    <div class="container">
        <h1 class="white-text">Sign In Was Successful</h1>
    </div>
</section>
<section class="container">
    <!-- section 1 -->
    <div class="row padding-l-r-15">
        <div class="col padding-4 bg-white">
            <h4>
                Thank you for signing in for our program. Our staff will contact with you as soon as possible
            </h4>
            
    </div>

<?php require_once "./templates/maps_scripts_footer.php"; ?>
<?php
    session_start();
    if(!isset($_SESSION['u_id'])){
    header('Location: index.php');
    exit();
}
?>
<header class="pc_header">
    <nav class="navbar fixed-top navbar-expand col-lg-12">
        <ul class="navbar-nav col-lg-8">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Web Programavimas" class="logo" /></a>
        <li class="nav-item">
            <a class="nav-link active" href="home_page.php">PAGRINDINIS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home_page.php#paslaugos_row">PASLAUGOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home_page.php#atsiliepimai_row">ATSILIEPIMAI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">APIE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacts.php">KONTAKTAI</a>
        </li>
        <li class="nav-item">
        </p>
        </li>
    </ul>
    <form class="col-lg-2" action="php/includes/logout.php" method="post">
    <?php
    if (isset($_SESSION['u_id'])) {
        echo 'Sveiki prisijungę, '.$_SESSION['u_uid'];
        echo '<button type="submit" name="submit" class="btn btn-dark">Atsijungti</button>';
    }
    ?>
    </form>
    <ul class="navbar-nav col-lg-1 offset-lg-1">
        <li>
            <a href="https://www.facebook.com/Web-Programavimas-578086222527354/" class="nav-link"> <i class="fab fa-facebook"></i> </a>
        </li>
        <li>
            <a href="https://www.instagram.com/alm1nas/" class="nav-link"> <i class="fab fa-instagram"></i> </a>
        </li>
    </ul>
    </nav>
</header>

<header class="mobile_header fixed-top">
    <nav class="navbar navbar-light col-xs-12 p-4">
      <button class="navbar-toggler col-xs-4" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand col-xs-4" href="#"><img src="images/logo.png" alt="Web Programavimas" class="logo" /></a>

    </nav>
    <div class="pos-f-t ">
  <div class="collapse " id="navbarToggleExternalContent">
    <div class="bg_mobile">
        <ul class="navbar-nav col-md-12">

        <li class="nav-item">
            <a class="nav-link active" href="home_page.php">PAGRINDINIS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home_page.php#paslaugos_row">PASLAUGOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home_page.php#atsiliepimai_row">ATSILIEPIMAI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">APIE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacts.php">KONTAKTAI</a>
        </li>
        </ul>
    </div>

  </div>

</div>
</header>

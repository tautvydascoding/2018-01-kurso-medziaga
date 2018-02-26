<?php

// login pavyko sesijos pradzia
ob_start();
session_start();

// patikrinti ar prisijunge vartotojas ir jei ne tai redirect i index.php
if (!isset($_SESSION['Prisijungta']) || $_SESSION['Prisijungta'] == false) {
    header("Location: login_forma.php");

}
?>

<h1>Prisijungėte!</h1>
<form method="post" action="atsijungti.php">
<input type="submit" value="Atsijungti">
</form>

<?php
    session_start();
    $_SESSION['Prisijungta'] = false;
    header("Location: index.php");
?>

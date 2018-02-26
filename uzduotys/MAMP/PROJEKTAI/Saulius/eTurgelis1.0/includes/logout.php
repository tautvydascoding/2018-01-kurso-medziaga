<?php
session_start();
session_destroy();
header("Location: ../index.php");
// header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/Baigiamasis-beta/skelbimas-add-new.php");

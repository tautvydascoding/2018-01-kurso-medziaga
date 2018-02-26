<?php
define('DB_NAME', 'login');
define('USER', 'root');
define('PASS', 'root');
define('DB_HOST', 'localhost');

$conn = mysqli_connect(DB_HOST, USER, PASS, DB_NAME);
mysqli_set_charset($conn, 'utf8');


$foto = mysqli_real_escape_string($conn, $_REQUEST['foto']);
$pavadinimas = mysqli_real_escape_string($conn, $_REQUEST['antraste']);
$aprasymas = mysqli_real_escape_string($conn, $_REQUEST['aprasymas']);
$ikeleID = mysqli_real_escape_string($conn, $_REQUEST['userid']);

$sql = "INSERT INTO prekes (foto, antraste, aprasymas, userid) VALUES  ('$foto', '$pavadinimas', '$aprasymas', '$ikeleID')";
$rezultatai = mysqli_query($conn, $sql);



// header("Location: ../index.php");
if (!$rezultatai) {
    alert("ivyko klaida");
} else {
    header('Location: ../redirect2.php');
}

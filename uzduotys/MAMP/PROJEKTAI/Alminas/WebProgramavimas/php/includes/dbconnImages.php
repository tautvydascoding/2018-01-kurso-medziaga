<?php

$dbServername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "images";


$conn = mysqli_connect($dbServername, $dbusername, $dbpassword, $dbname);


//===========
function getImage($nr) {
    global $conn;
    $SQL = "SELECT * FROM `images` WHERE id='$nr';";
    // mysqli_query - grazina duomenis MYSQL objekte
    $rezultatai = mysqli_query($conn, $SQL); // mysqli_query - ivykdo uzduota SQL teksta

    if( !$rezultatai  ) {
        echo "Ieskomo paveiksliuko nera. nr: " . $nr . " <br> ";
        return NULL;
    } else {
        // MYSQL objekta verciam i masyvas
        // $resultatu_masyvas = mysqli_fetch_row($resultatai);
        return $rezultatai;
        // mysqli_fetch_assoc - pavercia i associatyvu masyva
        // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
        // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
    }
}


 ?>

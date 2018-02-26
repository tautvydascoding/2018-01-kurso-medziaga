<?php

$dbServername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "articles";


$conn = mysqli_connect($dbServername, $dbusername, $dbpassword, $dbname);


//===========
function getArticle($nr) {
    global $conn;
    $SQL = "SELECT * FROM `articles` WHERE article_id='$nr';";
    // mysqli_query - grazina duomenis MYSQL objekte
    $resultatai = mysqli_query($conn, $SQL); // mysqli_query - ivykdo uzduota SQL teksta

    if( !$resultatai  ) {
        echo "Ieskomo straipsnio nera. nr: " . $nr . " <br> ";
        return NULL;
    } else {
        // MYSQL objekta verciam i masyvas
        // $resultatu_masyvas = mysqli_fetch_row($resultatai);
        return $resultatai;
        // mysqli_fetch_assoc - pavercia i associatyvu masyva
        // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
        // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
    }
}


 ?>

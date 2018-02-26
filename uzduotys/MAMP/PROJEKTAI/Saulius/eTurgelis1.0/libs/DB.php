<?php
define('DB_NAME', 'login');
define('USER', 'root');
define('PASS', 'root');
define('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, USER, PASS, DB_NAME);
mysqli_set_charset($connection, 'utf8');

function getPrisijungimas() {
global $connection;

    if (!$connection) {
        echo "ERROR" . mysqli_connect_error($connection) . "<br>";
    } else {
        // echo "Jus prisijungete prie db <br>";
    }
    return $connection;
}

// $result = mysql_query("SELECT * FROM prekes", $connection);
// $num_rows = mysql_num_rows($result);
// echo "$num_rows Rows\n";

function getInfo($nr) {
    $manoSQL = "SELECT * FROM prekes WHERE id='$nr';";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if(!$rezultatai) {
        return NULL;
    } else {
        $rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
        return $rezultatu_masyvas;
    }

}
function getUserInfo($useris) {
    $manoSQL = "SELECT * FROM user WHERE id='$useris';";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if(!$rezultatai) {
        return NULL;
    } else {
        $rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
        return $rezultatu_masyvas;
    }

}

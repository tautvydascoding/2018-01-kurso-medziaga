<?php
//phpinfo(); //parodo php informacija modulius ir t.t.
define('DB_NAME', 'hospital1');
define('USER', 'root');
define('PASS', 'root');
define('DB_HOST', 'localhost');



// getDoctor($nr)
// createDoctor($vardas, $pavarde)
// deleteDoctor($nr)
// editDoctor($nr, $vardas, $pavarde)
// getDoctors()

$connection = mysqli_connect(DB_HOST, USER, PASS, DB_NAME);
//$connection = mysqli_connect(DB_HOST, USER, PASS, DB_NAME, 8888); // su pakeistu portu

function getPrisijungimas() {
global $connection;

    if (!$connection) {
        echo "ERROR" . mysqli_connect_error($connection) . "<br>";
    } else {
        // echo "Jus prisijungete prie db <br>";
    }
    return $connection;
}

function getDoctor($nr) {
    // global $connection;
    $manoSQL = "SELECT * FROM doctors WHERE id='$nr';";
    //mysqlquery grazina duomenis mysql objekte
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if(!$rezultatai) {
        echo "Tokio daktaro nera: nr" . $nr . "<br>";
        return NULL;
    } else {
        //mysql objekta verciame i masyva
        $rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
        //mysqli_fetch_assoc pavercia i asociatyvu masyvas
        //mysqli_fetch_array pavercia i asociatyvu ir paprasta masyva
        //mysqli_fetch_row pavercia i paprasta masyva !gal, reik pasibandyt??
        return $rezultatu_masyvas;
    }

}
// $gydytojas = getDoctor(1); // masyvas
// if ($gydytojas != NULL) {
//     echo $gydytojas['name'] . " ";
//     echo $gydytojas['lname'] . "<br>";
// }

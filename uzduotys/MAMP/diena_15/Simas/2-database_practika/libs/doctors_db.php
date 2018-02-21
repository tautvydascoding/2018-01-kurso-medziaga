<?php

// phpinfo(); visa informacija apie php

// http://localhost/phpMyAdmin/

define('DB_NAME', 'hospital1');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');

$connect = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);

function getPrisijungimas() {
    global $connect;
// patikrinimas, ar veikia sujungimas
    if ( !$connect ) {
        echo "ERROR prisijungti prie duomenu bazes" . DB_NAME . "nepavyko <br>";
        echo "ERROR prisijungti prie duomenu bazes" . mysqli_connect_error($connect) . "nepavyko <br>";
    }// else {
    //     echo "Sveikinu, tau pavyko prisijungti <br>";
    // }
    return $connect;
}



//getDoctor($nr);
//createDoctor($vardas, $pavarde);
//deleteDoctor($nr);
//editDoctor($nr, $vardas, $pavarde);
//getDoctors();

//====================

function getDoctor($nr) {
    // global $connect;
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr';";
    //mysqli_query - grazina duomenis mySQL objektu;
    $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL ); //mysqli_query iveykdo uzduota mysql komanda
    if ( !$rezultatai ) {
        echo "Tokio daktaro nera: nr" . $nr . "<br>";
        return NULL;
    } else {
        //mySQL objekta verciame i masyva
        $rezultatu_masyvas = mysqli_fetch_assoc( $rezultatai ); 
        //mysqli_fetch_assoc - pavercia i asociavitu masyva
        //mysqli_fetch_array - pavercia i asociavitu masyva IR paprasta masyva
        //mysqli_fetch_row - pavercia i paprasta masyva
        return $rezultatu_masyvas;
    }
}

// $gydytojas = getDoctor(2); //masyvas

// if ($gydytojas != 0) {
//     echo $gydytojas['name'] . " ";
//     echo $gydytojas['lname'] . " ";
//     echo $gydytojas['id'] . "<br>";
// }
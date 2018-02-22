<?php



// phpinfo();               visa info apie php

define( 'DB_NAME', 'hospital1');
define( 'USER', 'root');
define( 'PASSWORD', 'root');
define( 'BD_HOST', 'localhost');

$prisijungimas = mysqli_connect( BD_HOST, USER, PASSWORD, DB_NAME);

if( !$prisijungimas ) {
    echo "Prisijungti nepavyko" . DB_NAME . "nepavyko <br>";
    echo "nepavyko" .mysqli_connect_Error($prisijungimas). "nepavyko <br>";
}else{
    echo "Jus prisijungete <br>";
}

// getDoctor($nr)
// createDoctor($vardas, $pavarde)
// deleteDoctor($nr)
// editDoctor($nr, $vardas, $pavarde)
//getDoctors($kiekis = 9999)

// function getPrisijungimas() {
// }

function getDoctor($nr) {
    // global $connection;
    $manoSQL = "SELECT * FROM doctors WHERE id='$nr';";
    $rezultatai = mysqli_query(   getPrisijungimas(), $manoSQL );
    if(!$rezultatai) {
        echo "Ieskome gydytojo nera. nr: " .$nr . "<br>";
        return NULL;
    }else{
        $rezultatu_masyvas = mysqli_fetch_assoc ($rezultatai);
        return $rezultatu_masyvas;
    }
}
// $gydytojas = getDoctor(2);
// if($gydytojas !=NULL) {
//     echo $gydytojas['name'] . "<br>";
// }

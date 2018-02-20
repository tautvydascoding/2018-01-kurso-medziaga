<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// phpinfo(); //info apie PHP

define('DB_NAME', 'hospital1');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


$connection = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);

if (!$connection) {
    echo "Prisijungti prie duomenu bazes " . DB_NAME . " nepavyko <br>";
    echo "Error " . mysqli_connect_errno($connection) . " nepavyko <br>";

} else {
    echo "Jus prisijungete prie duomenu bazes";
}

// getdoctor($nr);
// createDoctor($vardas, $pavarde);
// deleteDoctor($nr);
// editDoctor($nr, $vardas, $pavarde);
// getDoctors($kiekis = 9999);
//================
function getPrisijungimas() {
    global $connection;

    if (!$connection) {
        echo "Prisijungti prie duomenu bazes " . DB_NAME . " nepavyko <br>";
        echo "Error " . mysqli_connect_error($connection) . " nepavyko <br>";

    } else {
        echo "Jus prisijungete prie duomenu bazes <br>";
    }
    return $connection;
}



function getDoctor($nr) {
    global $connection;
    $manoSQL = "select * FROM doctors where id='$nr';";
    $rezultatas = mysqli_query(getPrisijungimas(), $manoSQL); //grazinamas objektas MySQL objekto formatu
    if (!$rezultatas){
        echo "ieskomo numerio gydytojo nera. Numeris: " . $nr . "<br>";
    } else {
        $rezultatas = mysqli_fetch_assoc( $rezultatas); // objekto vertimas i masyva
    }
    return $rezultatas;
}
?>
<!-- // $gydytojas = getDoctor(3);
//
// echo $gydytojas['name'] . " " ."<br>";
// echo $gydytojas['lname'] . " "  ."<br>";
// echo $gydytojas['id'] . " "  ."<br>";
// -->

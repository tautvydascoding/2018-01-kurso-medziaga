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
    // echo "Jus prisijungete prie duomenu bazes";
}

// getdoctor(21);
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
        // echo "Jus prisijungete prie duomenu bazes <br>";
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


/* idejimas i duomenu bazes
vardas kuriamo gydytojo vardas
vardas kuriamo gydytojo vardas
 */

function createDoctor($vardas, $pavarde) {

    $manoBBB = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde');";
    $result = mysqli_query(getPrisijungimas(), $manoBBB);

}
function createDoctor2($vardas, $pavarde) {
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); //uzkoduoja simbolius <,> del saugumo
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde); //uzkoduoja simbolius
    $manoBBB = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde');";
    $result = mysqli_query(getPrisijungimas(), $manoBBB);
    if ($result) {
        echo "PAVYKO";
    } else {
        echo "Error sukurti gydytojo nepavyko" . mysqli_error(getprisijungimas()) ."<br>";
    }

}
// createDoctor2('Veroni;>$ka', 'Voveraite');
// createDoctor('Tomaš', 'Pietškauskas');
// createDoctor('Marius', 'Zilinauskas');
// createDoctor('Paulina', 'Ovia');
//


// function deleteDoctor( $vardas ) {
//     $deletion = "DELETE FROM doctors WHERE name='$vardas';";
//     $result = mysqli_query(getPrisijungimas(), $deletion);
//
// }
// deleteDoctor('Tomaš');

function updateDoctor($nr, $vardas, $pavarde) {
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); //uzkoduoja simbolius <,> del saugumo
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde); //uzkoduoja simbolius
    $manoBBB = "UPDATE doctors SET name='$vardas', lname='$pavarde'
                WHERE id='$nr';";
    $result = mysqli_query(getPrisijungimas(), $manoBBB);
    if ($result) {
        echo "PAVYKO";
    } else {
        echo "Error sukurti gydytojo nepavyko" . mysqli_error(getprisijungimas()) ."<br>";
    }
}
// updateDoctor(3, 'Onute', 'Onutaite');
//paimsime visus gydytojus
function getDoctors() {
    $manoGDG = "SELECT * FROM doctors;";
    $result = mysqli_query(getPrisijungimas(), $manoGDG);
    if ($result) {
        return $result;
    } else {
        echo "ERROR: neradom gydytoju" . mysqli_error(getPrisijungimas());
        return NULL;
    }
}
$allDoctors = getDoctors();
// print_r($allDoctors);
// var_dump($allDoctors);

//paima pirma eilute ir pavercia i masyva
$gydytojas = mysqli_fetch_assoc( $allDoctors);

// var_dump($gydytojas);
// print_r($gydytojas);
while ($gydytojas) {
    echo "Pavarde " . $gydytojas['lname'] . "<br>";
    echo "Vardas " . $gydytojas['name'] . "<br>";
    $gydytojas = mysqli_fetch_assoc( $allDoctors);
}



 // $gydytojas = getDoctor(3);
//
// echo $gydytojas['name'] . " " ."<br>";
// echo $gydytojas['lname'] . " "  ."<br>";
// echo $gydytojas['id'] . " "  ."<br>";
// -->
